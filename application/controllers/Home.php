<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Registration_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }

    public function teachers()
    {
        $this->load->view('header');
        $this->load->view('teachers');
        $this->load->view('footer');
    }
    public function curriculum()
    {
        $this->load->view('header');
        $this->load->view('curriculum');
        $this->load->view('footer');
    }
    public function classes()
    {
        $this->load->view('header');
        $this->load->view('class-calender');
        $this->load->view('footer');
    }
    public function contact()
    {
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }
    public function faq_educational_enquiries()
    {
        $this->load->view('header');
        $this->load->view('faq-education-enquiries');
        $this->load->view('footer');
    }
    public function faq_finance_fees()
    {
        $this->load->view('header');
        $this->load->view('faq-finance-and-fees');
        $this->load->view('footer');
    }
    public function faq_prophetic_sports()
    {
        $this->load->view('header');
        $this->load->view('faq-prophetic-sports');
        $this->load->view('footer');
    }
    public function faq()
    {
        $this->load->view('header');
        $this->load->view('faq');
        $this->load->view('footer');
    }
    public function parents()
    {
        $this->load->view('header');
        $this->load->view('parents');
        $this->load->view('footer');
    }
    public function support()
    {
        $this->load->view('header');
        $this->load->view('support');
        $this->load->view('footer');
    }
    public function mm_registrationage7()
    {
        $this->load->view('header');
        $this->load->view('mm_registration_age7');
        $this->load->view('footer');
    }
    public function mm_registration_ongoing()
    {

        $this->load->view('header');
        $this->load->view('mm_registration_ongoing');
        $this->load->view('footer');
    }
    public function fh_registrationage7()
    {
        $this->load->view('header');
        $this->load->view('fh_registration_age7');
        $this->load->view('footer');
    }
    public function fh_registration_ongoing()
    {

        $this->load->view('header');
        $this->load->view('fh_registration_ongoing');
        $this->load->view('footer');
    }
    public function complaint()
    {
        $this->load->view('header');
        $this->load->view('complaint');
        $this->load->view('footer');
    }
    public function thankyou()
    {

        $this->load->view('thankyou');
    }
    public function parentsmm()
    {

        $baseURL = base_url();
        $pdfFilePath = 'assets/pdf/RM_Parent_Handbook_Mustafa-Mount.pdf';
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="RM_Parent_Handbook_Mustafa-Mount.pdf"');
        readfile($baseURL . 'assets/pdf/RM_Parent_Handbook_Mustafa-Mount.pdf');
    }
    public function parentsfh()
    {

        $baseURL = base_url();
        $pdfFilePath = 'assets/pdf/RM_Parent_Handbook_Felicity_House.pdf';
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="assets/pdf/RM_Parent_Handbook_Felicity_House.pdf"');
        readfile($baseURL . 'assets/pdf/RM_Parent_Handbook_Felicity_House.pdf');
    }

    public function supportsubmit()
    {
        $this->load->library('email');
        $inputs = $this->input->post();

        $recaptcha_secret = "6LfQsOoqAAAAADO5tLrUVSHoVl0UK5rrJP-VOIhj";
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$response&remoteip=$remoteip";
        $result = json_decode(file_get_contents($url));

        if (!$result->success) {
            $data['success'] = false;
            $data['message'] = 'Recaptcha verification failed.';
            echo json_encode($data);
            return;
        }

        $mail_body = '
        <div style="font-family: Arial, sans-serif; color: #333;">
            <h2 style="color: #0D6EFD;">Support Request Details</h2>
            <p>Please find the details below:</p>
            <table style="border-collapse: collapse; width: 100%;">
                <tr style="background-color: #f2f2f2;">
                    <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Field</th>
                    <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Details</th>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Name</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($inputs['firstName']) . '</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Last Name</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($inputs['lastName']) . '</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Email</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($inputs['email']) . '</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Phone</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($inputs['phoneNumber']) . '</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Address</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($inputs['address']) . '</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Amount</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($inputs['zakahAmount']) . '</td>
                </tr>
            </table>
            <br>
            <p>Thank you for reaching out to us.</p>
            <p><b>Regards,</b><br>The Rawdah Madrassah Team</p>
        </div>';
        $toMail = 'rawda@greensvilletrust.org';

        // $this->email->from('no-reply@rawdah.cloud', 'Support Us - The Rawdah Madrassah');
        $this->email->from('zaidkhurshid525@gmail.com', 'Support Us - The Rawdah Madrassah');
        $this->email->to($toMail);
        // $this->email->to('zaidkhurshid525@gmail.com');
        $this->email->subject('Support Us, The Rawdah Madrassah');
        $this->email->message($mail_body);

        if ($this->email->send()) {
            $confirmation_body = '
            <div style="font-family: Arial, sans-serif; color: #333;">
                <h2 style="color: #0D6EFD;">Thank You for Contacting Us!</h2>
                <p>Your information was submitted successfully. Our team will contact you soon.</p>
                <br>
                <p><b>Regards,</b><br>Rawḍah Team</p>
            </div>';

            // $this->email->from('no-reply@rawdah.cloud', 'Support Us - The Rawdah Madrassah');
            $this->email->from('zaidkhurshid525@gmail.com', 'Support Us - The Rawdah Madrassah');
            $this->email->to($inputs['email']);
            $this->email->subject('Support Us, The Rawdah Madrassah');
            $this->email->message($confirmation_body);
            $this->email->send();

            $data['success'] = true;
            $data['message'] = 'Email sent successfully.';
        } else {
            $data['success'] = false;
            $data['message'] = 'Failed to send email, please try again later.';
        }

        echo json_encode($data);
    }


    public function contactus()
    {
        $this->load->library('email');
        $this->load->model('Contact_queries_model');

        $inputs = $this->input->post();
        $recaptcha_secret = "6LfQsOoqAAAAADO5tLrUVSHoVl0UK5rrJP-VOIhj";
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$response&remoteip=$remoteip";
        $result = json_decode(file_get_contents($url));

        if (!$result->success) {
            $data['success'] = false;
            $data['message'] = 'Recaptcha verification failed.';
            echo json_encode($data);
            return;
        }

        $contactData = [
            'first_name' => $inputs['firstName'],
            'last_name' => $inputs['lastName'],
            'email' => $inputs['email'],
            'phone' => $inputs['phoneNumber'],
            'message' => $inputs['message'],
            'class' => $inputs['className'],
        ];
        $this->Contact_queries_model->add($contactData);

        // $toMail = ($inputs['className'] == "mustafa") ? 'info@rawdahmadrasah.co.uk' : 'rawda@greensvilletrust.org';
        $toMail = 'zaidkhurshid525@gmail.com';

        $mail_body = '
        <div style="font-family: Arial, sans-serif; color: #333;">
            <h2 style="color: #0D6EFD;">Contact Us - User Information</h2>
            <p>Please see the following information about the user:</p>
            <table style="border-collapse: collapse; width: 100%;">
                <tr style="background-color: #f2f2f2;">
                    <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Field</th>
                    <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Details</th>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Name</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($inputs['firstName']) . ' ' . htmlspecialchars($inputs['lastName'] ?? "") . '</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Email</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($inputs['email']) . '</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Telephone</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($inputs['phoneNumber']) . '</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Message</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . nl2br(htmlspecialchars($inputs['message'])) . '</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Class</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . ($inputs['className'] == "mustafa" ? "Mustafa Mount" : "Felicity House") . '</td>
                </tr>
            </table>
            <br>
            <p>Thank you for contacting us.</p>
            <p><b>Regards,</b><br>The Rawḍah Madrasah Team</p>
        </div>';

        // $this->email->from('no-reply@rawdah.cloud', 'Contact US - The Rawḍah Madrasah');
        $this->email->from('zaidkhurshid525@gmail.com', 'Contact US - The Rawḍah Madrasah');
        $this->email->to($toMail);
        $this->email->subject('Contact Us - Rawḍah Madrasah');
        $this->email->message($mail_body);

        if ($this->email->send()) {
            $confirmation_body = '
            <div style="font-family: Arial, sans-serif; color: #333;">
                <h2 style="color: #0D6EFD;">Thank You for Contacting Us!</h2>
                <p>Your information has been submitted successfully. Our team will contact you soon.</p>
                <br>
                <p><b>Regards,</b><br>Rawḍah Team</p>
            </div>';

            // $this->email->from('no-reply@rawdah.cloud', 'Contact US - The Rawḍah Madrasah');
            $this->email->from('zaidkhurshid525@gmail.com', 'Contact US - The Rawḍah Madrasah');
            $this->email->to($inputs['email']);
            $this->email->subject('Thank You for Contacting Us - Rawḍah Madrasah');
            $this->email->message($confirmation_body);
            $this->email->send();

            $data['success'] = true;
            $data['message'] = 'Email sent successfully.';
        } else {
            $data['success'] = false;
            $data['message'] = 'Failed to send email, please try again later.';
        }

        echo json_encode($data);
    }

    public function register()
    {

        $this->load->library('email');
        $this->load->model('Registration_model');
        $inputs = $this->input->post();
        // echo"<pre>";
        // print_r($inputs);exit;

        $recaptcha_secret = "6LfQsOoqAAAAADO5tLrUVSHoVl0UK5rrJP-VOIhj";
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$response&remoteip=$remoteip";
        $result = json_decode(file_get_contents($url));


        if (!$result->success) {
            $errorCodes = $result->{'error-codes'};
            if (in_array('invalid-input-response', $errorCodes)) {
                $data['success'] = false;
                $data['message'] = 'Recaptcha verification failed.';
                echo json_encode($data);
                return;
            } else {
                $data['success'] = false;
                $data['message'] = 'Recaptcha verification failed.';
                echo json_encode($data);
                return;
            }
        }


        $requiredFields = [
            'ArabicLevels',
            'ChildForename',
            'ChildLegalSurname',
            'child_email',
            'ChildAddress',
            'ChildCity',
            'ChildPostCode',
            'ChildDOB',
            'Gender',
            // 'whichPassport',
            'disability',
            'doctorTelephone',
            'Guardian1_fname',
            'Guardian1_sname',
            'Guardian1_telephone',
            'Guardian1_mobile',
            'Guardian1_email',
            'Guardian1_relation',
            'Guardian1_occupation',
            // 'Guardian2_fname',
            // 'Guardian2_sname',
            // 'Guardian2_telephone',
            // 'Guardian2_mobile',
            // 'Guardian2_email',
            // 'Guardian2_relation',
            // 'Guardian2_occupation',
            // 'presentSchool',
            // 'presentSchool_headteacher'
        ];

        $emptyFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($inputs[$field]) || empty($inputs[$field])) {
                $emptyFields[] = $field;
            }
        }




        if (!empty($emptyFields)) {
            $response = [
                'success' => false,
                'message' => 'Please fill out all required fields: ' . implode(', ', $emptyFields)
            ];
            echo json_encode($response);
            return;
        }

        $contactFields = [
            'Guardian2_mobile' => 'Guardian 2 Mobile',
            'Guardian2_telephone' => 'Guardian 2 Telephone',
            'Guardian1_mobile' => 'Guardian 1 Mobile',
            'Guardian1_telephone' => 'Guardian 1 Telephone',
            'doctorTelephone' => 'Doctor Telephone',
            'emergencycontact' => 'Emergency Contact',
            'Guardian1_workTel' => 'Guardian 1 Work Telephone',
            'Guardian2_workTel' => 'Guardian 2 Work Telephone',
            'child_phone_number' => 'child phone number'
        ];

        $invalidContactMessages = [];

        foreach ($contactFields as $field => $label) {
            if (!empty($inputs[$field]) && strlen($inputs[$field]) !== 11) {
                $invalidContactMessages[] = "$label must be exactly 11 characters.";
            }
        }

        if (!empty($invalidContactMessages)) {
            $response = [
                'success' => false,
                'message' => implode("<br>", $invalidContactMessages)
            ];
            echo json_encode($response);
            return;
        }


        $existingStudent = $this->User_model->get_user_by_phone($inputs['child_phone_number']);

        if ($existingStudent) {
            echo json_encode([
                'success' => false,
                'message' => 'Student already exists with the given phone number.'
            ]);
            return;
        }
        $existingStudentemail = $this->User_model->get_user_by_email($inputs['child_email']);

        if ($existingStudentemail) {
            echo json_encode([
                'success' => false,
                'message' => 'Student already exists with the given email.'
            ]);
            return;
        }










        $studentUser = array(
            'role_id' => 2,
            'full_name' => $this->input->post('ChildForename') . ' ' . $this->input->post('ChildMiddleName') . ' ' . $this->input->post('ChildLegalSurname'),
            'username' => $this->input->post('child_phone_number') ?: ($this->input->post('child_email')),
            'email' => $this->input->post('child_email'),
            'phone_number' => $this->input->post('child_phone_number'),
            'password' => password_hash('123456', PASSWORD_BCRYPT),
        );

        $guardianUser = array(
            'role_id' => 3,
            'full_name' => $this->input->post('Guardian1_email') != '' ? $this->input->post('Guardian1_fname') . ' ' . $this->input->post('Guardian1_mname') . ' ' . $this->input->post('Guardian1_sname')  : $this->input->post('Guardian2_fname') . ' ' . $this->input->post('Guardian2_mname') . ' ' . $this->input->post('Guardian2_sname'),
            'username' => $this->input->post('Guardian1_email') != '' ? $this->input->post('Guardian1_email') : $this->input->post('Guardian2_email'),
            'email' => $this->input->post('Guardian1_email') != '' ? $this->input->post('Guardian1_email') : $this->input->post('Guardian2_email'),
            'phone_number' => $this->input->post('Guardian1_email') != '' ? $this->input->post('Guardian1_mobile') : $this->input->post('Guardian2_mobile'),
            'password' => password_hash('123456', PASSWORD_BCRYPT),
        );

        $student_user = $this->User_model->insert_student_user($studentUser);
        $guardian_user = $this->User_model->insert_guardian_user($guardianUser);

        $parentsData = array(
            // 'father_title' => $this->input->post('Guardian1_Title'),
            'fathers_name' => $this->input->post('Guardian1_fname'),
            'fathers_middle_name' => $this->input->post('Guardian1_mname'),
            'fathers_surname' => $this->input->post('Guardian1_sname'),
            'father_address' => $this->input->post('Guardian1_address'),
            'father_city' => $this->input->post('Guardian1_City'),
            'father_postcode' => $this->input->post('Guardian1_postcode'),
            'father_home_telephone' => $this->input->post('Guardian1_telephone'),
            'fathers_mobile' => $this->input->post('Guardian1_mobile'),
            'father_work_telephone' => $this->input->post('Guardian1_workTel'),
            'father_email' => $this->input->post('Guardian1_email'),
            'fathers_occupation' => $this->input->post('Guardian1_occupation'),


            // 'mother_title' => $this->input->post('Guardian2_Title'),
            'mothers_name' => $this->input->post('Guardian2_fname'),
            'mothers_middle_name' => $this->input->post('Guardian2_mname'),
            'mothers_surname' => $this->input->post('Guardian2_sname'),
            'mother_address' => $this->input->post('Guardian2_address'),
            'mother_city' => $this->input->post('Guardian2_City'),
            'mother_postcode' => $this->input->post('Guardian2_postcode'),
            'mother_home_telephone' => $this->input->post('Guardian2_telephone'),
            'mothers_mobile' => $this->input->post('Guardian2_mobile'),
            'mother_work_telephone' => $this->input->post('Guardian2_workTel'),
            'mother_email' => $this->input->post('Guardian2_email'),
            'mothers_occupation' => $this->input->post('Guardian2_occupation'),

            'relation' => $this->input->post('Guardian1_email') != '' ? 'F' : 'M',
            'guardians_relation' => $this->input->post('Guardian1_email') != '' ? 'Father' : 'Mother',
            'guardians_name' => $this->input->post('Guardian1_email') != '' ? $this->input->post('Guardian1_fname') . ' ' . $this->input->post('Guardian1_mname') . ' ' . $this->input->post('Guardian1_sname')  : $this->input->post('Guardian2_fname') . ' ' . $this->input->post('Guardian2_mname') . ' ' . $this->input->post('Guardian2_sname'),
            'guardians_email' => $this->input->post('Guardian1_email') != '' ? $this->input->post('Guardian1_email')  : $this->input->post('Guardian2_email'),
            'guardians_mobile' => $this->input->post('Guardian1_email') != '' ? $this->input->post('Guardian1_mobile') : $this->input->post('Guardian2_mobile'),
            'guardians_occupation' => $this->input->post('Guardian1_email') != '' ? $this->input->post('Guardian1_occupation') : $this->input->post('Guardian2_occupation'),
            'guardians_address' => $this->input->post('Guardian1_email') != '' ? $this->input->post('Guardian1_address') : $this->input->post('Guardian2_address'),
            'user_id' => $guardian_user,
        );

        $parents = $this->User_model->insert_parent_record($parentsData);

        $childData = array(
            'arabic_levels' => $this->input->post('ArabicLevels'),
            'current_address' => $this->input->post('ChildAddress'),
            'permanent_address' => $this->input->post('ChildAddress'),
            'first_name' => $this->input->post('ChildForename'),
            'middle_name' => $this->input->post('ChildMiddleName'),
            'preferred_forename' => $this->input->post('Child_Pref_Forename'),
            'last_name' => $this->input->post('ChildLegalSurname'),
            'email' => $this->input->post('child_email'),
            'mobile' => $this->input->post('child_phone_number'),
            'city' => $this->input->post('ChildCity'),
            'postcode' => $this->input->post('ChildPostCode'),
            'date_of_birth' => date('y/m/d', strtotime($this->input->post('ChildDOB'))),
            'gender_id' => $this->input->post('Gender'),
            'disability' => $this->input->post('disability'),
            'disabilities_details' => $this->input->post('disabilityDetails'),
            'alergic' => $this->input->post('medicalConditions'),
            'alergy_details' => $this->input->post('medicalConditionsInfo'),
            'doctor_name' => $this->input->post('DoctorName'),
            'doctor_address' => $this->input->post('DoctorAddress'),
            'doctor_city' => $this->input->post('DoctorCity'),
            'doctor_postcode' => $this->input->post('DoctorPostcode'),
            'doctor_telephone' => $this->input->post('doctorTelephone'),
            // 'entry_year' => $this->input->post('proposedYear'),
            'child_school_year' => $this->input->post('CurrentYear'),


            'emergency_contact_forename' => $this->input->post('emergencyforename'),
            'emergency_contact_surname' => $this->input->post('emergencysurname'),
            'emergency_contact_contact' => $this->input->post('emergencycontact'),
            'emergency_contact_email' => $this->input->post('emergencyemail'),

            'invoice_to' => $this->input->post('invoice_to'),

            'has_sibling' => $this->input->post('sibling_attending'),

            'sibling_detail' => $this->input->post('siblings_detail'),

            'home_schooled' => $this->input->post('homeschooled'),
            'previous_school_details' => $this->input->post('presentSchool'),
            'head_teacher_name' => $this->input->post('presentSchool_headteacher'),
            'previous_school_address' => $this->input->post('Sibling_address'),
            'previous_school_city' => $this->input->post('Sibling_city'),
            'previous_school_postcode' => $this->input->post('Sibling_postcode'),
            'payment_method' => $this->input->post('payMethod'),
            'caste' => $this->input->post('Ethnicity'),
            'terms_conditions' => $this->input->post('termsandconditions_check'),
            'photography_permission' => $this->input->post('photos_permission_check'),
            'role_id' => '2',
            'user_id' => $student_user,
            'parent_id' => $parents
        );


        $childData['bjj_check'] = $this->input->post('BJJcheck');
        $childData['attend_madrassah'] = $this->input->post('childMadrassah');
        $childData['madrasah_detail'] = $this->input->post('childMadrassahDetails');
        $childData['course_enrolled'] = $this->input->post('courseenrolled');
        $childData['hear_about'] = $this->input->post('hearabout');
        $childData['hear_about_details'] = $this->input->post('heardetails');

        $student = $this->User_model->insert_student($childData);


        // add student record 

        $studentRecordData = array(
            'student_id' => $student,
            'class_id' => $this->input->post('class_id') ?? Null,
            'section_id' => $this->input->post('section_id') ?? Null,
            'is_default' => '1',
            'active_status' => '1',
            'academic_id' => '1'
        );

        $student_record  = $this->User_model->insert_student_record($studentRecordData);


        if ($student) {
            $post_data = $this->input->post();
            unset($post_data['singleparentcheck']);
            unset($post_data['section_id']);
            unset($post_data['parent1adresscheck']);
            unset($post_data['parent2adresscheck']);
            $this->sendEmailRegistration($post_data);
            $data1['success'] = true;
            $data1['message'] = 'Application Submitted Successfully';
        } else {
            $data['success'] = false;
            $data['message'] = 'please try again later';
        }
        echo json_encode($data1);
        return;
    }

    public function sendEmailRegistration($postsdata)
    {
        $this->load->library('email');
        unset($postsdata['g-recaptcha-response']);
        $inputs = $postsdata;

        if ($inputs['class_ids'] == 5) {
            // $toMail = 'admin@rawdahmadrasah.co.uk';
            $toMail = 'zaidkhurshid525@gmail.com';
            $inputs['class_ids'] = 'Mustafa Mount';
        } else {
            $inputs['class_id'] = 'Felicity House';
            // $toMail = 'rawda@greensvilletrust.org';
            $toMail = 'zaidkhurshid525@gmail.com';
        }
        if ($inputs['Gender'] == 1) {
            $inputs['Gender'] = 'Male';
        } else {
            $inputs['Gender'] = 'Female';
        }

        $paymentMethods = [
            '0' => 'Full Payment after deposit',
            '1' => 'Two Installments after deposit',
            '2' => 'Monthly Payments (Exceptional Grounds)'
        ];

        $inputs['payMethod'] = $paymentMethods[$inputs['payMethod']] ?? $inputs['payMethod'];

        $fieldLabels = [
            'ArabicLevels' => 'Arabic Level',
            'ChildAddress' => 'Child Address',
            'ChildLegalSurname' => 'Child Legal Surname',
            'ChildForename' => 'Child Forename',
            'ChildMiddleName' => 'Child Middle Name',
            'Child_Pref_Forename' => 'Child Preferred Forename',
            'ChildCity' => 'Child City',
            'ChildPostCode' => 'Child Postcode',
            'ChildDOB' => 'Child Date of Birth',
            'Gender' => 'Gender',
            'whichPassport' => 'Passport',
            'ChildOtherPassport' => 'Other Passport Description',
            'ChildHobbies' => 'Child Hobbies',
            'disability' => 'Disability',
            'disabilityDetails' => 'Disability Details',
            'medicalConditions' => 'Medical Conditions',
            'medicalConditionsInfo' => 'Medical Conditions Information',
            'OtherInfo' => 'Additional Information',
            'DoctorName' => 'Doctor Name',
            'DoctorAddress' => 'Doctor Address',
            'DoctorCity' => 'Doctor City',
            'DoctorPostcode' => 'Doctor Postcode',
            'doctor_telephone' => 'Doctor Telephone',
            'proposedYear' => 'Proposed Entry Year',
            'CurrentYear' => 'Current School Year',
            'Guardian1_Title' => 'Guardian 1 Title',
            'Guardian1_sname' => 'Guardian 1 Surname',
            'Guardian1_fname' => 'Guardian 1 First Name',
            'Guardian1_mname' => 'Guardian 1 Middle Name',
            'Guardian1_address' => 'Guardian 1 Address',
            'Guardian1_City' => 'Guardian 1 City',
            'Guardian1_postcode' => 'Guardian 1 Postcode',
            'Guardian1_telephone' => 'Guardian 1 Telephone',
            'Guardian1_mobile' => 'Guardian 1 Mobile',
            'Guardian1_email' => 'Guardian 1 Email',
            'Guardian1_relation' => 'Guardian 1 Relation',
            'Guardian1_occupation' => 'Guardian 1 Occupation',
            'Guardian2_Title' => 'Guardian 2 Title',
            'Guardian2_sname' => 'Guardian 2 Surname',
            'Guardian2_fname' => 'Guardian 2 First Name',
            'Guardian2_mname' => 'Guardian 2 Middle Name',
            'Guardian2_address' => 'Guardian 2 Address',
            'Guardian2_City' => 'Guardian 2 City',
            'Guardian2_postcode' => 'Guardian 2 Postcode',
            'Guardian2_telephone' => 'Guardian 2 Telephone',
            'Guardian2_mobile' => 'Guardian 2 Mobile',
            'Guardian2_email' => 'Guardian 2 Email',
            'Guardian2_relation' => 'Guardian 2 Relation',
            'Guardian2_occupation' => 'Guardian 2 Occupation',
            'siblingName' => 'Sibling Name',
            'presentSchool' => 'Present School',
            'presentSchool_headteacher' => 'Present School Headteacher',
            'Sibling_address' => 'Sibling Address',
            'Sibling_city' => 'Sibling City',
            'Sibling_postcode' => 'Sibling Postcode',
            'payMethod' => 'Payment Method',
            'class_ids' => 'Class',
            'class_id' => 'Class',
            'Guardian1_workTel' => 'Guardian 1 Work Telephone',
            'Guardian2_workTel' => 'Guardian 2 Work Telephone',
            'child_email' => 'Child Email',
            'child_phone_number' => 'Child Phone Number',
            'siblings_attending' => 'Sibling Attending',
            'invoice_to' => 'Invoice To',
            'sibling_details' => 'Sibling Details',
            'homeschooled' => 'Home Schooled',
            'termsandconditions_check' => 'Terms and Conditions',
            'photos_permission_check' => 'Photos Permission',
            'emergencyforename' => 'Emergency Contact Forename',
            'emergencysurname' => 'Emergency Contact Surname',
            'emergencyemail' => 'Emergency Contact Email',
            'emergencycontact' => 'Emergency Contact Number',
        ];

        $mail_body = '
        <div style="font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px;">
            <h2 style="color: #0D6EFD; text-align: center;">Registration Details</h2>
            <p style="text-align: center;">Please review the registration information below:</p>
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <tr style="background-color: #f7f7f7;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Field</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Details</th>
                </tr>';

        foreach ($inputs as $field_name => $field_value) {
            $label = isset($fieldLabels[$field_name]) ? $fieldLabels[$field_name] : $field_name;
            $mail_body .= '
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($label) . '</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">' . nl2br(htmlspecialchars($field_value)) . '</td>
                </tr>';
        }

        $mail_body .= '
            </table>
            <br>
            <p style="text-align: center;">Thank you for your attention.</p>
            <p style="text-align: center;"><b>Regards,</b><br>The Rawḍah Madrasah Team</p>
        </div>';

        // $this->email->from('info@rawdah.cloud', 'The Rawḍah Madrasah');
        $this->email->from('zaidkhurshid525@gmail.com', 'The Rawḍah Madrasah');
        $this->email->to($toMail);
        $this->email->subject('Registration Submission - Rawḍah Madrasah');
        $this->email->message($mail_body);
        $this->email->set_mailtype("html");

        $this->email->send();
    }



    public function complaintsubmit()
    {
        $this->load->library('email');
        $postsdata = $this->input->post();
        $recaptcha_secret = "6LfQsOoqAAAAADO5tLrUVSHoVl0UK5rrJP-VOIhj";
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$response&remoteip=$remoteip";
        $result = json_decode(file_get_contents($url));

        if (!$result->success) {
            $errorCodes = $result->{'error-codes'};
            if (in_array('invalid-input-response', $errorCodes)) {
                $data['success'] = false;
                $data['message'] = 'Recaptcha verification failed.';
                echo json_encode($data);
                return;
            } else {
                $data['success'] = false;
                $data['message'] = 'Recaptcha verification failed.';
                echo json_encode($data);
                return;
            }
        }
        unset($postsdata['g-recaptcha-response']);
        $inputs = $postsdata;


        // $toMail = ($inputs['class'] == "mustafa") ? 'admin@rawdahmadrasah.co.uk' : 'rawda@greensvilletrust.org';
        $toMail = 'zaidkhurshid525@gmail.com';
        $fieldLabels = [
            'class' => 'Class',
            'yourname' => 'Your Name',
            'pubilname' => 'Pupil Name',
            'relationship' => 'Relationship',
            'address' => 'Address',
            'postalcode' => 'Postal Code',
            'daytimephonenumberMM' => 'Daytime Phone Number',
            'eveningphonenumberMM' => 'Evening Phone Number',
            'details' => 'Details of Complaint',
            'detailsaction' => 'Details of Taken Action'
        ];

        $mail_body = '
            <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
                <h2 style="color: #0D6EFD; text-align: center;">Complaint Submission Details</h2>
                <p style="text-align: center;">Please check the following complaint:</p>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <tr style="background-color: #f7f7f7;">
                        <th style="padding: 10px; text-align: left; border: 1px solid #ddd; color: #333;">Field</th>
                        <th style="padding: 10px; text-align: left; border: 1px solid #ddd; color: #333;">Details</th>
                    </tr>';

        foreach ($inputs as $field_name => $field_value) {
            $label = isset($fieldLabels[$field_name]) ? $fieldLabels[$field_name] : $field_name;
            $mail_body .= '
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd; color: #555;">' . htmlspecialchars($label) . '</td>
                        <td style="padding: 8px; border: 1px solid #ddd; color: #555;">' . nl2br(htmlspecialchars($field_value)) . '</td>
                    </tr>';
        }

        $mail_body .= '
                </table>
                <br>
                <p style="text-align: center;">Thank you for your attention.</p>
                <p style="text-align: center;"><b>Regards,</b><br>The Rawḍah Madrasah Team</p>
            </div>';

        // $this->email->from('info@rawdah.cloud', 'The Rawḍah Madrasah');
        $this->email->from('zaidkhurshid525@gmail.com', 'The Rawḍah Madrasah');
        $this->email->to($toMail);
        $this->email->subject('Complaint Submission - Rawḍah Madrasah');
        $this->email->message($mail_body);
        $this->email->set_mailtype("html");

        if ($this->email->send()) {
            $data1['success'] = true;
            $data1['message'] = 'Complaint Submitted Successfully';
            echo json_encode($data1);
        } else {
            $data1['success'] = false;
            $data1['message'] = 'Failed to submit complaint, please try again later.';
            echo json_encode($data1);
        }
    }

    public function termsandconditions()
    {
        $this->load->view('header');
        $this->load->view('termsandconditions');
        $this->load->view('footer');
    }



    // new register function 


}
