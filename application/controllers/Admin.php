<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->load->model('GetModel','fetch');
                $this->redirectIfNotLoggedIn();
        }

        public function index()
        {
                $enq=$this->fetch->getEnquiries();
                $this->load->view('admin/adminheader',['enq' => $enq,
                                                        'adminTitle'=>'Dashboard'
                                                ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/dashboard'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Admissions()
        {
                $info=$this->fetch->getInfoParams('info','reg_paid','1');
                $this->load->view('admin/adminheader',['info' => $info,
                                                        'adminTitle'=>'Admissions'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/admissions'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Payments()
        {
                $data=$this->fetch->getInfo('payments');
                $this->load->view('admin/adminheader',['data' => $data,
                                                        'adminTitle'=>'Payments'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/payments'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Refund($appl, $type)
        {
                $data=$this->fetch->getPayInfo('payments','appl_id',$appl,$type);
                $this->load->view('admin/refund',['data' => $data,
                                                        'adminTitle'=>'Refund'
                                                        ]);
        }
        public function Refund_process()
        {
                $ref=$this->session->flashdata('refund');
                $key=$ref['payment_id'];
                unset($ref['payment_id']);
                $this->load->model('EditModel','update');
                $status= $this->update->updateInfoById('payments',$ref,'razorpay_payment_id', $key);
                if($status){
                        $this->session->set_flashdata('success','Refund initiated!' );
                        redirect('Admin/Payments');
                }
                else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Payments');
                }
        }

        public function PaymentDetails()
        {
                $data=$this->fetch->getInfoById('payments','receipt',$this->input->post('receipt'));
                $user=$this->fetch->getInfoById('users','user_id',$data->user_id);
                $response='<div class="row"><div class="col-md-8">Application ID: <strong>'.$data->appl_id.'</strong></div>';
                $response.='<div class="col-md-4">Paid on: <strong>'.date('d-m-Y', strtotime($data->payment_date)).'</strong></div>';
                if($data->payment_type=="REG"){
                        $response .='<div class="col-md-8">Amount Paid: <strong>Rs. 500/-</strong></div>';
                } else {
                        $response .='<div class="col-md-8">Amount Paid: <strong>Rs. 13,000/-</strong></div>';
                }
                $response.='<div class="col-md-4">Receipt: <strong>'.$data->receipt.'</strong></div>';
                $response.='<div class="col-md-12 mt-3">Payment ID: &nbsp;<mark>'.$data->razorpay_payment_id.'</mark></div>';
                $response.='<div class="col-md-12 mt-1">Order ID: <strong class="ml-4">'.$data->razorpay_order_id.'</strong></div>';
                $response.='<div class="col-md-12 mt-1">Signature: <strong class="ml-3"> '.$data->razorpay_signature.'</strong></div>';
                if($data->error!=""){
                        $response .='<div class="col-md-12">Errors:'.$data->error.'</div>';
                }
                $fname=$lname=$phone=$email='NA';
                if(isset($user->fname)){
                        $fname=$user->fname;
                }
                if(isset($user->lname)){
                        $lname=$user->lname;
                }
                if(isset($user->phone)){
                        $phone=$user->phone;
                }
                if(isset($user->email)){
                        $email=$user->email;
                }
                $response.='<div class="col-md-12 mt-4">Name: <strong>'.$fname.' '.$lname.'</strong></div>';
                $response.='<div class="col-md-12 mt-1">Contact no.: <strong>'.$phone.'</strong></div>';
                $response.='<div class="col-md-12 mt-1">E-mail: <strong>'.$email.'</strong></div>';
                $response.='</div>';
                echo $response;
                exit; 
        }

        public function RefundDetails()
        {
                $data=$this->fetch->getInfoById('payments','receipt',$this->input->post('receipt'));
                $user=$this->fetch->getInfoById('users','user_id',$data->user_id);
                $response='<div class="row"><div class="col-md-8">Application ID: <strong>'.$data->appl_id.'</strong></div>';
                $response.='<div class="col-md-4">Refund initiaited on: <strong>'.date('d-m-Y', strtotime($data->refund_date)).'</strong></div>';
                if($data->payment_type=="REG"){
                        $response .='<div class="col-md-8">Refund amount requested: <strong>Rs. 500/-</strong></div>';
                } else {
                        $response .='<div class="col-md-8">Refund amount requested: <strong>Rs. 13,000/-</strong></div>';
                }
                $response.='<div class="col-md-12 mt-3">Refund ID: &nbsp;<mark>'.$data->refund_id.'</mark></div>';
                $response.='<div class="col-md-12 mt-1">For Payment ID: <strong>&nbsp;'.$data->razorpay_payment_id.'</strong></div>';
                if($data->error!=""){
                        $response .='<div class="col-md-12">Errors:'.$data->error.'</div>';
                }
                $fname=$lname=$phone=$email='NA';
                if(isset($user->fname)){
                        $fname=$user->fname;
                }
                if(isset($user->lname)){
                        $lname=$user->lname;
                }
                if(isset($user->phone)){
                        $phone=$user->phone;
                }
                if(isset($user->email)){
                        $email=$user->email;
                }
                $response.='<div class="col-md-12 mt-4">Name: <strong>'.$fname.' '.$lname.'</strong></div>';
                $response.='<div class="col-md-12 mt-1">Contact no.: <strong>'.$phone.'</strong></div>';
                $response.='<div class="col-md-12 mt-1">E-mail: <strong>'.$email.'</strong></div>';
                $response.='</div>';
                echo $response;
                exit; 
        }

        public function Viewform($id)
        {
                $info=$this->fetch->getInfoById('info','id',$id);
                $this->load->view('admin/adminheader',['info' => $info,
                                                        'adminTitle'=>'Application form'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/admin-filled-form'); 
                $this->load->view('admin/adminfooter');
        }
        
	public function Users()
	{
		$users=$this->fetch->getInfoParams('users','role','user');
                $this->load->view('admin/adminheader',['users'=>$users , 'adminTitle'=>'Users']); 
                $this->load->view('admin/adminaside'); 
		$this->load->view('admin/users');
                $this->load->view('admin/adminfooter'); 
	}

        public function News()
        {
                $news=$this->fetch->getNews();
                $this->load->view('admin/adminheader',['news' => $news,
                                                        'adminTitle'=>'News'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminNews'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Note()
        {
                $note=$this->fetch->getNote();
                $this->load->view('admin/adminheader',['note' => $note,
                                                        'adminTitle'=>'Note from head of school'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminNote'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Notice()
        {
                $notices=$this->fetch->getNotices();
                $this->load->view('admin/adminheader',['notices' => $notices,
                                                        'adminTitle'=>'Notice'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminNotice'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Careers()
        {
                $careers=$this->fetch->getCareers();
                $this->load->view('admin/adminheader',['careers' => $careers,
                                                        'adminTitle'=>'Careers'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminCareers'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Applications()
        {
                $apps=$this->fetch->getApplications();
                $this->load->view('admin/adminheader',['apps' => $apps,
                                                        'adminTitle'=>'Job Applications'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminApplications'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Gallery()
        {
                $cat=$this->fetch->getGalleryCategories();
                $this->load->view('admin/adminheader',['categories' => $cat,
                                                        'adminTitle'=>'Gallery'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminGallery'); 
                $this->load->view('admin/adminfooter');  
        }

        public function galleryInner($id)
        {
                $name=$this->fetch->getCategoryName($id)->name;
                $cat_id=$this->fetch->getCategoryName($id)->id;
                $images=$this->fetch->getImagesByCat($id);
                $this->load->view('admin/adminheader',['images' => $images,
                                                        'adminTitle'=>'Gallery | '.$name,
                                                        'cat_name'=>$name,
                                                        'cat_id'=>$cat_id
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminGalleryInner'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Slider()
        {
                $images=$this->fetch->getHeroImg();
                $this->load->view('admin/adminheader',['images' => $images,
                                                        'adminTitle'=>'Slider Images'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminHeroImages'); 
                $this->load->view('admin/adminfooter');  
        }

        public function webProfile()
        {
                $profile=$this->fetch->getWebProfile();
                $this->load->view('admin/adminheader', ['profile' => $profile,'adminTitle'=>'Web Profile']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/webProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function adminProfile()
        {
                $admProfile=$this->fetch->getAdminProfile();
                $this->load->view('admin/adminheader', ['admProfile' => $admProfile, 'adminTitle'=>'Admin Profile']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function ResetPwd($id)
        {
                $user=$this->fetch->getInfoById('users','user_id', $id);
                $h=substr($user->fname,0,3).substr($user->phone,0,3);
                $hash=password_hash( $h, PASSWORD_DEFAULT);
                $data['pwd']=$hash;
                $this->load->model('Auth_model', 'auth');
                $status=$this->auth->changeLoginPassword($data, $id);
                if($status){
                        $to =$user->email;
                        $subject = "Password reset alert - Grace International School";
                        $msg = '<h4>Your password has been reset -</h4>';
                        $msg .= '<h4>New password is first three letters of you first name plus first three digits of you phone no.</h4>';
                        $msg .= '<h5>For example</h5>';
                        $msg .= '<h5>First name: Siddharth</h5>';
                        $msg .= '<h5>Phone no : 7894561230</h5>';
                        $msg .= '<h5>Password will be : Sid789</h5>';
                        $msg .= '<p>Login to GIS Online admission portal.</p>';
                        $msg .= '<a href="'.base_url().'online-admissions">click here to login</a>';
                        
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= 'From: <'.USERNAME.'>' . "\r\n";
                        
                        mail($to,$subject,$msg,$headers);
                        $this->session->set_flashdata('success','Password reset successful !');
                        redirect('Admin/Users');
                }
                else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Users');
                }
        }

        public function CashPaid($id)
        {
                $data['is_paid']='1';
                $data['pay_mode']='CASH';
                $data['payment_date']=date('Y-m-d');
                $this->load->model('EditModel', 'edit');
                $status=$this->edit->updateInfoById('info',$data,'id',$id);
                if($status){
                        $this->session->set_flashdata('success','Payment status updated !');
                        redirect('Admin/Admissions');
                }
                else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Admissions');
                }
        }

        public function DeleteUser($id)
        {
                $appl_id=$this->fetch->getInfoById('info','user_id',$id)->appl_id;
                $this->load->model('DeleteModel','del');
                $status=$this->del->deleteById('users','user_id',$id);
                if($status==true){
                        $status=$this->del->deleteById('info','user_id',$id);
                        $dir_path  = 'assets/docs/'.$appl_id;
                        $path = './assets/docs/'.$appl_id;
                        if(is_dir($dir_path))
                        {
                                delete_files($path, true);
                                rmdir($path);
                        }
                        
                        $this->session->set_flashdata('success','user deleted !');
                        redirect('Admin/Users');
                }
                else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Users');
                }
        }

        public function PrintInvoice($id,$type)
        {
                $info=$this->fetch->getInfoById('info','user_id',$id);
                $paid=$this->fetch->getPayInfo('payments','user_id',$id,$type);
                $this->load->view('users/invoice-print',['userTitle'=>'Print Invoice','info'=>$info,'paid'=>$paid,'type'=>$type]);
        }

        public function rootLogin()
        {
                if($this->input->post('p')===ROOT_PWD){
                        $this->session->set_userdata(['root' => 'root']);  
                        redirect('Admin/rootFileUpload');
                }
                else{
                        redirect('Admin');
                }
        }

        public function rootFileUpload()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Root']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/rootUpload'); 
                $this->load->view('admin/adminfooter');  
        }

        public function processRootUpload()
        {
                if($_FILES['file']['name']!=null){
                        $path = $this->input->post('path');
                        $initialize = array(
                                "upload_path" => $path,
                                "allowed_types" => "*",
                                "overwrite" => true
                        );
                        $this->load->library('upload', $initialize);
                        if (!$this->upload->do_upload('file')) {
                                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                                redirect('Admin/rootFileUpload');
                        }
                        else {
                                $this->session->set_flashdata('success','Uploaded !' );
                                redirect('Admin/rootFileUpload');
                        } 
                }
                else{
                        $this->session->set_flashdata('failed','No file selected !');
                        redirect('Admin/rootFileUpload');
                }
        }

        public function processRootNewFolder()
        {
                $path = $this->input->post('path');
                $folder = $this->input->post('folder');
                if(!file_exists($path.$folder)){
                    if(mkdir($path.$folder)){
                        $this->session->set_flashdata('success','Created !');
                        redirect('Admin/rootFileUpload');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/rootFileUpload');
                    }
                }
                else{
                        $this->session->set_flashdata('failed','Already exists');
                        redirect('Admin/rootFileUpload');
                }
        }
        
        public function Extract()
        {
                if(!empty($_FILES['file']['name'])){ 
                     $config['upload_path'] = './'; 
                     $config['allowed_types'] = 'zip'; 
           
                     $this->load->library('upload',$config); 
                     if($this->upload->do_upload('file')){ 
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name'];
           
                        $zip = new ZipArchive;
                        $res = $zip->open("./".$filename);
                        if ($res === TRUE) {
                          $extractpath = $this->input->post('path');
                          $zip->extractTo($extractpath);
                          $zip->close();
                          unlink('./'.$filename);
                          $this->session->set_flashdata('success','Upload & Extract successful.');
                          redirect('Admin/rootFileUpload');
                        }
                        else {
                          $this->session->set_flashdata('failed','Failed to extract !');
                          redirect('Admin/rootFileUpload');
                        }
                        
                    }
                    else{ 
                       $this->session->set_flashdata('failed','Failed to upload !');
                       redirect('Admin/rootFileUpload');
                    } 
                }
                else{ 
                    $this->session->set_flashdata('failed','No file selected for uploading!');
                    redirect('Admin/rootFileUpload');
                } 
           
        }

        public function rootDownload()
        {
                $path=$this->input->post('path');
                $dirPath=$this->input->post('dirPath');
                if($path!=''){
                        $path=$this->input->post('path');
                        $this->load->helper('download');
                        if(force_download($path, NULL)){
                                $this->session->set_flashdata('success','File download initiated !');
                                redirect('Admin/rootFileUpload');
                        }
                        else{
                                $this->session->set_flashdata('failed','Error !');
                                redirect('Admin/rootFileUpload');
                        }
                }
                if($dirPath!=''){
                        $this->load->library('zip');
                        $filename = "backupz.zip";
                        $this->zip->read_dir($dirPath);
                        $this->zip->archive($filename);
                        if($this->zip->download($filename)){
                                $this->session->set_flashdata('success','Zip download initiated !');
                                redirect('Admin/rootFileUpload');
                        }
                        else{
                                $this->session->set_flashdata('failed','Error !');
                                redirect('Admin/rootFileUpload');
                        }
                }
                $this->session->set_flashdata('failed','No path given !');
                redirect('Admin/rootFileUpload');
        }

        public function dbDownload()
        {
                $this->load->dbutil();
                $prefs = array(     
                        'format'      => 'zip',             
                        'filename'    => 'my_db_backup.sql'
                );
                $backup =& $this->dbutil->backup($prefs); 
                $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
                // $save = 'assets/'.$db_name;
                $this->load->helper('file');
                write_file($save, $backup); 
                $this->load->helper('download');
                force_download($db_name, $backup); 
        }

        public function delBackupz(){
                if(unlink('backupz.zip')){
                        $this->session->set_flashdata('success','Backupz.zip deleted !');
                        redirect('Admin/rootFileUpload');
                }
                else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/rootFileUpload');
                }
        }

        public function rootUploadOff()
        {
                $this->session->unset_userdata(['root']);
                redirect('Admin');
        }

}
