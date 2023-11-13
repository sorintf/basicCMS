<?php
class AdminFunctions extends BaseFunctions
{

    public $version = "a1e";
    public $view = "a_index";

    public function __construct(){
        if (isset($_GET['view'])) {
            $this->view = trim(htmlspecialchars($_GET['view']));
        }



        $this->rep['users']['nr']['total'] = $this->usersGetNrByStatus("all");
        $this->rep['users']['nr']['approved'] = $this->usersGetNrByStatus('3');
        $this->rep['users']['nr']['pending_approval'] = $this->usersGetNrByStatus('2');
        $this->rep['users']['nr']['pending_confirmation'] = $this->usersGetNrByStatus('1');
        $this->rep['users']['nr']['blocked'] = $this->usersGetNrByStatus('0');
        $this->rep['users']['nr']['pending_deletion'] = $this->usersGetNrByStatus('-1');




        if ($this->view=='b_acc_logout') {
            $this->doLogout();
            $this->redirect = $this->buildUrl(array('view'=>"f_index"));
        }elseif (isset($_COOKIE['rememberme'])) {

            $this->loginWithCookieData();
        }elseif (isset($_SESSION['id_user'])&&!empty($_SESSION['id_user'])&&$_SESSION['loggedin']==true) {

            $this->loginWithSessionData();
        }

        if (isset($_POST['registera'])) {

            $args = array();

            if (isset($_POST['register-email'])) {
                $args['email'] = trim(htmlspecialchars(strtolower($_POST['register-email'])));
            }else{
                $args['email'] = "";
            }

            if (isset($_POST['register-tel'])) {
                $args['tel'] = trim(htmlspecialchars(strtolower(preg_replace("/[^0-9]/", "", $_POST['register-tel']))));
            }else{
                $args['tel'] = "";
            }
            if (isset($_POST['register-username'])) {
                $args['username'] = trim(htmlspecialchars($_POST['register-username']));
            }else{
                $args['username'] = "";
            }
            if (isset($_POST['register-password'])) {
                $args['password'] = trim(htmlspecialchars($_POST['register-password']));
            }else{
                $args['password'] = "";
            }



            if (isset($_POST['register-firstname'])) {
                $args['firstname'] = trim(htmlspecialchars($_POST['register-firstname']));
            }else{
                $args['firstname'] = "";
            }
            if (isset($_POST['register-lastname'])) {
                $args['lastname'] = trim(htmlspecialchars($_POST['register-lastname']));
            }else{
                $args['lastname'] = "";
            }

            if (isset($_POST['register-acc_tc'])) {
                $args['acc_tc'] = trim(htmlspecialchars($_POST['register-acc_tc']));
            }else{
                $args['acc_tc'] = "";
            }
            if (isset($_POST['register-acc_nl'])) {
                $args['acc_nl'] = trim(htmlspecialchars($_POST['register-acc_nl']));
            }else{
                $args['acc_nl'] = "";
            }

            if ($this->registerUser($args)) {
                // we can handle the redirect after successful registration here or inside the funciton
                // $this->redirect = $this->buildUrl(array('view'=>'b_acc_general'));
            } else {
                $this->rep['email'] = $args['email'];
                $this->rep['tel'] = $args['tel'];
                $this->rep['username'] = $args['username'];
                $this->rep['firstname'] = $args['firstname'];
                $this->rep['lastname'] = $args['lastname'];
            }
        }elseif (isset($_POST['logina'])) {

            $args = array();

            if (isset($_POST['login-username'])) {
                $args['username'] = trim(htmlspecialchars($_POST['login-username']));
            }else{
                $args['username'] = "";
            }
            if (isset($_POST['login-password'])) {
                $args['password'] = trim(htmlspecialchars($_POST['login-password']));
            }else{
                $args['password'] = "";
            }

            if ($this->loginWithPostData($args)) {
                // $this->redirect = $this->buildUrl(array('view'=>'b_acc_general'));
            }else{
                $this->rep['username'] = $args['username'];
            }
        }

        if ($this->view=="a_index") {

            $this->page_title = "Two & From - CMS";
            $this->page_description = "Atinge întregul potențial al organzației tale";
        }elseif ($this->view=="a_users_list") {

            $this->dataTable = true;

            if (isset($_GET['status'])) {
                $status = trim(htmlspecialchars($_GET['status']));
            }else{
                $status = "all";
            }
            $this->rep['users_list'] = $this->usersGetByStatus($status);
        }
    }








    protected function usersGetNrByStatus( $status="all" ) {
        if ($status=="all") {
            $where = "1";
        }else{
            $where = "u.`status`=:status";
        }
        if ($this->databaseConnection()) {
            $q = $this->db_connection->prepare("
                SELECT 
                    COUNT(u.`ID`) AS nr 
                FROM `users` u 
                WHERE 
                    $where
            ");
            if ($status!="all") {
                $q->bindValue(":status", $status, PDO::PARAM_INT);
            }
            $q->execute();
            $r = $q->fetchObject();
            $q = null;
            return $r->nr;
        }
        return false;
    }
    protected function usersGetByStatus( $status="all" ) {
        if ($status=="all") {
            $where = "1";
        }else{
            $where = "u.`status`=:status";
        }
        if ($this->databaseConnection()) {
            $q = $this->db_connection->prepare("
                SELECT 
                    u.*, 
                    AES_DECRYPT(u.`firstname`, :secretkey) AS firstname_user, 
                    AES_DECRYPT(u.`lastname`, :secretkey) AS lastname_user, 
                    AES_DECRYPT(u.`email`, :secretkey) AS email_user, 
                    AES_DECRYPT(u.`tel`, :secretkey) AS tel_user 
                FROM `users` u 
                WHERE 
                    $where
            ");
            $q->bindValue(":secretkey", DB_SECRET, PDO::PARAM_STR);
            if ($status!="all") {
                $q->bindValue(":status", $status, PDO::PARAM_INT);
            }
            $q->execute();
            $r = $q->fetchAll();
            $q = null;
            return $r;
        }
        return false;
    }
}