<?php  
class Page extends CI_Controller {
    
    function about(){
        $this->load->view('front/about');
    }

    function services(){
        $this->load->view('front/services');
    }
    
    function contact (){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">', '</p>');
        
        if($this->form_validation->run() == true) {
            //Here we will process contact us form
            // $config = Array(
            //     'Protocol' => 'smtp',
            //     'smtp_host' => 'ssl://smtp.gmail.com',
            //     'smtp_port' => 465,
            //     'smtp_user' => 'chaurasiyaavinash97@gmail.com',
            //     'smtp_pass' => 'Avi@11#12',
            //     'mailtype' => 'html',
            //     'charset' => 'utf-8',
            //     'newline' => "\r\n"
            // );
                
            // $this->load->library('email', $config);

            // $this->email->to('chaurasiyaavinash97@gmail.com');
            // $this->email->from('example@example.com');
            // $this->email->subject(' You have received an enquiry\r\n');

            // $name= $this->input->post ('name');
            // $email= $this->input->post ('email');
            // $msg= $this->input->post ('message');

            // $message = "\r\nName: ".$name;
            // $message .= "<br>";
            // $message = "\r\nEmail: ".$email;
            // $message .= "<br>";
            // $message = "\r\nMessage: ".$msg;
            // $message .= "<br>";
            // $message .= "<br>";

            // $message.= "Email Example by Avinash Chaurasiya";

            // $this->email->message($message);

            // $this->session->set_flashdata('msg', 'Thanks for your enquiry, we will get back to you soon');
            // redirect(base_url('page/contact'));

        } else {
            $this->load->view('front/contact-us');
        } 
    }
}

?>






