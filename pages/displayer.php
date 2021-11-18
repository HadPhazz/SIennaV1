<?php
session_set_cookie_params( ["samesite" =>"Strict"]);
session_name("sienna"); // changement du nom de cookie de session
session_start();
require_once("logic.php"); // include of form related php functions

class Displayer{
  protected $logic;
  public function __construct(){

  }

  public function renderSiennaNav(){
    echo "
    <div id='haut'>
      <h1 id='title'><a href='index.php'>SIENNA</a></h1>
      <p class='page'>
        <a class='nav_link' href='pages/recovery.php'>DATA RECOVERY SOLUTIONS</a>
      </p>
      <p class='page'>
        /
      </p>
      <p class='page'>
        <a class='nav_link' href='pages/storage.php'>DATA STORAGE SOLUTIONS</a>
      </p>
      <p class='page'>
        /
      </p>
      <p class='page'>
        <a class='nav_link' href='pages/account.php'>ACCOUNT</a>
      </p>
    </div>
    ";
  } // Fin renderSiennaNav()

  public function renderSiennaNavFromPages(){
    echo "
    <div id='haut'>
      <h1 id='title'><a href='../index.php'>SIENNA</a></h1>
      <p class='page'>
        <a class='nav_link' href='recovery.php'>DATA RECOVERY SOLUTIONS</a>
      </p>
      <p class='page'>
        /
      </p>
      <p class='page'>
        <a class='nav_link' href='storage.php'>DATA STORAGE SOLUTIONS</a>
      </p>
      <p class='page'>
        /
      </p>
      <p class='page'>
        <a class='nav_link' href='account.php'>ACCOUNT</a>
      </p>
    </div>
    ";
  } // Fin renderSiennaNavFromPages()

  public function renderSiennaFooter(){
    echo "
    <footer class='footer'>
      <ul>
        <li><a href='pages/about.php'>ABOUT</a></li>
      </ul>
      <ul>
        <li><a href='pages/authentication.php'>LOGIN</a></li>
      </ul>
      <ul>
        <li><a href='mailto:Hadrien.paris@icloud.com'>CONTACT</a></li>
      </ul>
    </footer>
    ";
  } // Fin renderSiennaFooter()

  public function renderSiennaFooterFromPages(){
    echo "
    <footer class='footer'>
      <ul>
        <li><a href='about.php'>ABOUT</a></li>
      </ul>
      <ul>
        <li><a href='authentication.php'>LOGIN</a></li>
      </ul>
      <ul>
        <li><a href='mailto:Hadrien.paris@icloud.com'>CONTACT</a></li>
      </ul>
    </footer>
    ";
  } // Fin renderSiennaFooter()

  public function renderSiennaMainPage(){
    echo "
    <div id='presentation_div'>
      <img id='presentation_img' src='img/racks.png' alt='Server-racks cabinets in a warehouse'>
    </div>

    ";
  } // Fin renderSiennaMainPage()

  public function renderSiennaRecoveryPage(){
    echo "
    <div id='explanation'>
      <section class='about'>
        <h2 class='explanation_title'>DATA RECOVERY SOLUTIONS</h2>
        <p class='explanation_p'>
          We're offering our customers data recovery solutions for different media types.After the reception of the storage medium, we'll take between 5-7 business days to perform data recovery, after which we'll send you a new storage medium (HDD or SSD) with the recovered data on it. You can choose the type of device to be sent and the prioriy level of the recovery on the form page.
        </p>
      </section>
      <section class='about'>
        <h2 class='explanation_title'>MEDIA TYPES</h2>
        <ul id='media_list'>
          <li> HDD : SATA - SAS - SCSI / 2.5 - 3.5 </li>
          <li> SSD : SATA - SAS - NVMe / 2.5 - M.2 - U.2 - PCIe</li>
          <li> Optical : CD - DVD </li>
          <li> Tape : LTO - Floppy Disk - ZIP Disk</li>
          <li> Others : mSATA - eSATA - eUSB - Compact Flash - USB Drives - Thunderbolt - SD & microSD - Sata Express - RDX </li>
        </ul>
      </section>
      <section class='about'>
        <h2 class='explanation_title'>PRIORITY</h2>
        <p class='explanation_p'>
          Priority is set according to the subscribed plan, and set between the reception of the device and the shipment to the customer :
        </p>
        <ul id='priority_list'>
          <li> Low Priority : Up to 7 business days</li>
          <li> Medium Priority : Up to 5 business days</li>
          <li> High Priority : Up to 2 business days </li>
        </ul>
      </section>
    </div>
    <div id='plans'>
      <section class='tier'>
        <h2 class='tier_name'>DATA RECOVERY</h2>
        <p class='description'>
          HDD - SSD
        </p>
        <p class='description'>
          Optical - Tape
        </p>
        <form method='post' action='formRecovery.php'>
          <input class='button' type='submit' style='background:#303030' value='Complete the form'>
        </form>
      </section>
    </div>
    ";
  } // Fin renderSiennaRecoveryPage() -> Page Recovery

  public function renderSiennaStoragePage(){
    echo "
    <div id='explanations'>
      <section class='about'>
        <h2 class='explanation_title'>DATA STORAGE SOLUTIONS</h2>
        <p class='explanation_p'>
          We're offering our customers long-term data storage solutions using military-grade hardware resistant to any type of ingress.Our offer is designed for individuals and businesses who want a reliable, secure, enterprise-class data storage solution.Your data will be stored in anonymized containers to ensure a maximum protection against time, background radiations, dust, fire and water.No data can be stored for ever, at least on one medium. We'll keep your data for as long as 75 years, with monthly backups for hard-drives (25 years or less) and yearly backups for LTO-Tape (more than 25 years).
        </p>
      </section>
      <section class='about'>
        <h2 class='explanation_title'>DATA PROTECTION</h2>
        <p class='explanation_p'>
          After the reception of the storage medium, we'll take between 5-7 business days to perform data backups, using our custom-made archiving servers, running 24/7 on a closed local network.Once your data is copied onto a new storage medium (HDD or LTO-Tape), we'll put it in a special IP68 container, which will be stored in an undisclosed location with full time monitoring (cameras, temperature, radiation, ground activity, ...).
        </p>
      </section>
      <section class='about'>
        <h2 class='explanation_title'>PRIORITY</h2>
        <p class='explanation_p'>
          Priority is set according to the subscribed plan, and set between the reception of the device and the shipment to the customer :
        </p>
        <ul id='priority_list'>
          <li> Low Priority : Up to 7 business days</li>
          <li> Medium Priority : Up to 5 business days</li>
          <li> High Priority : Up to 2 business days </li>
        </ul>
      </section>
    </div>
    <div id='plans'>
      <section class='tier'>
        <h2 class='tier_name'>DATA STORAGE</h2>
        <p class='description'>
           Long-Term Storage
        </p>
        <p class='description'>
           up to 16Tb
        </p>
        <p class='description'>
           up to 75 years
        </p>
        <form method='post' action='formStorage.php'>
          <input class='button' type='submit' style='background:#303030' value='Complete the form'>
        </form>
      </section>
    </div>
    ";
  }// Fin renderSiennaStoragePage() -> Page Stockage

  public function renderSiennaMessageFormPageRecovery(){
    echo "
    <div>
      <p class='form_p'>
        Once completed, this form will be sent to our technical team. Please fill all those fields in order to have your data recover in the best delays.Our warehouse adress will be in the confirmation email, you will have to send us your device in a ESD-protected package.
      </p>
    </div>
    ";
  } // Fin renderSiennaMessageFormPageRecovery() -> Message Form Recovery

  public function renderSiennaMessageFormPageStorage(){
    echo "
    <div>
      <p class='form_p'>
        Once completed, this form will be sent to our technical team. Please fill all those fields in order to have your data stored and protected as soon as possible.
        Our warehouse adress will be in the confirmation email, you will have to send us your device in a ESD-protected package. We'll do a data backup on our servers, and we'll send back your device to your adress.
        This process can take up to a week. Your data backup will be stored afterwards.
      </p>
    </div>
    ";
  } // Fin renderSiennaMessageFormPageStorage() -> Message Form Stockage

  public function renderSiennaOrderStatus(){
    echo "
    <div id='explanation'>
      <section class='about'>
        <h2 class='explanation_title'>Your order is being processed, now what ?</h2>
        <p class='explanation_p'>
          We'll do our best to get back to you as soon as possible using the provided email address in the form you just completed. Our warehouse address will be in the confirmation email so that you can send us your storage media, and we'll inform you about the recovery/backup status at each step. We'll send you back the device once everything is completed(the provided device for the data storage service or a new media for the recovery service if necessary).
          <br>
          Thanks for choosing SIENNA for you data recovery/data archiving solutions !
        </p>
      </section>
    </div>
    ";
  } // Fin renderSiennaOrderStatus()

  public function renderSiennaAboutPage(){
    echo "
    <div id='about'>
      <section class='about'>
        <h2 class='explanation_title'>ABOUT US</h2>
        <p class='explanation_p'>
          Sienna's goal is to help its customers recover and archive their data. Our Data Recovery service provides a reliable and cost-effective way to recover your data on any type of storage device, old or new. Our Data Storage solutions are designed to meet the needs of our customers, individuals or businesses, and help them safeguard their data over time, with the use of customized storage solutions, such as IP68 military grade containers, for maximum protection against any type of intrusion.
        </p>
        <h2 class='explanation_title'>OUR PRCING LIST</h2>
        <div id='server_div'>
          <img id='pricelist_img' align='left' src='../img/PriceList.png' alt='our services pricing list'>
        </div>
      </section>
    </div>
    ";
  }

  public function renderSiennaCheckoutPage(){ //action='https://www.bitcoinqrcodemaker.com/api/style=bitcoin&fiat=EUR&amount=15&address=bc1qfvv3xz4jxsyr9f53qk9xs5uvmr4j72phyt5s2p'
    echo "
    <div id='explications'>
      <section class='about'>
        <h2 class='explanation_title'>BITCOIN CHECKOUT</h2>
        <form method='post' action='btc_checkout.php'>
          <div>
            <p>
              <input class='button_form' type='submit' value='Submit'>
            </p>
          </div>
        </form>
      </section>
    </div>
    ";
  } // End renderSiennaCheckoutPage()

  public function renderSiennaRecoveryFormPage(){
    echo "
    <div class='form-example'>
      <form action='formRecovery.php' method='post'>
        <div class='form-example'>
          <label>Organization : </label>
          <input type='text' name='organization' placeholder='Organization' id='company_name' minlength='5' maxlength='15'>
        </div>
        <div class='form-example'>
          <label>Name: </label>
          <input type='text' name='name' placeholder='Name' id='name' minlength='4' maxlength='25' required>
        </div>
        <div class='form-example'>
          <label>Address: </label>
          <input type='text' name='address' placeholder='Address' id='adress' minlength='4' maxlength='35' required>
        </div>
        <div class='form-example'>
          <label>Email address: </label>
          <input type='email' name='email' placeholder='Email address' id='email' minlength='4' maxlength='35' required>
        </div>
        <div class='form-example'>
          <label>Device type: </label>
          <select name='device_type' id='devices'>
            <option value='Hard-Drive Disk'>Hard-Drive Disk : SATA - SAS - SCSI</option>
            <option value='Solid-State Drive'>Solid-State Drive : SATA - NVMe</option>
            <option value='Optical Drive'>Optical Drive : CD - DVD</option>
            <option value='Tape Drive'>Tape Drive : LTO - FloppyDisk - ZIP Disk</option>
            <option value='Others mediums'>Others : USB - SD/microSD - CF - RDX</option>
          </select>
        </div>
        <div class='form-example'>
          <label>Choose a priority:</label>
          <select name='priority' id='plan_list'>
            <option value='Basic'>Basic : Low Priority (20€ per Tb)</option>
            <option value='Express'>Express : Medium Priority (35€ per Tb)</option>
            <option value='Crucial'>Crucial : High Priority (50€ per Tb)</option>
          </select>
        </div>
        <div class='form-submit_page'>
          <input class='button_form_submit' type='submit' value='Submit'>
        </div>
      </form>
      <div id='server_div'>
        <img id='server_img' src='../img/hdd.jpg' alt='A hard-disk drive'>
      </div>
    </div>
    ";
    if (!empty($_POST)){
      $organization = $_POST['organization'];
      $name = $_POST['name'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $device_type = $_POST['device_type'];
      $priority = $_POST['priority'];
      $this->logic = new Logic();
      $this->logic->orderCreation($this->logic->cleanUserInput($organization), $this->logic->cleanUserInput($name), $this->logic->cleanUserInput($address), $this->logic->cleanUserInput($email), $device_type, $priority);

    }
  } // Fin renderSiennaStoragePage() -> Form Recovery

  public function renderSiennaStorageFormPage(){
    echo "
    <div class='form-example'>
      <form action='formStorage.php' method='post'>
      <div class='form-example'>
        <label>Organization : </label>
        <input type='text' name='organization' placeholder='Organization' id='company_name' minlength='5' maxlength='15'>
      </div>
      <div class='form-example'>
        <label>Name: </label>
        <input type='text' name='name' placeholder='Name' id='name' minlength='4' maxlength='25' required>
      </div>
      <div class='form-example'>
        <label>Address: </label>
        <input type='text' name='address' placeholder='Address' id='adress' minlength='4' maxlength='35' required>
      </div>
      <div class='form-example'>
        <label>Email address: </label>
        <input type='email' name='email' placeholder='Email address' id='email' minlength='4' maxlength='35' required>
      </div>
        <div class='form-example'>
          <label>Archiving time </label>
          <select name='archiving_time' id='archiving_time'>
            <option value='1'>1 year - 30€/Tb </option>
            <option value='2'>2 years - 50€/Tb </option>
            <option value='5'>5 years - 125€/Tb </option>
            <option value='10'>10 years - 250€/Tb </option>
            <option value='15'>15 years - 275€/Tb</option>
            <option value='20'>20 years - 300€/Tb</option>
            <option value='25'>25 years - 500€/Tb</option>
            <option value='30'>30 years - 550€/Tb</option>
            <option value='40'>40 years - 600€/Tb</option>
            <option value='50'>50 years - 1000€/Tb</option>
            <option value='75'>75 years - 1500€/Tb</option>
          </select>
        </div>
        <div class='form-example'>
          <label>Choose a priority:</label>
          <select name='priority' id='plan_list'>
            <option value='Basic'>Basic : Low Priority</option>
            <option value='Express'>Express : Medium Priority</option>
            <option value='Crucial'>Crucial : High Priority</option>
          </select>
        </div>
        <div class='form-submit_page'>
          <input class='button_form_submit' type='submit' value='Submit'>
        </div>
      </form>
      <div id='server_div'>
        <img id='server_img' src='../img/server.jpg' alt='A storage server rack'>
      </div>
    </div>
    ";
    if (!empty($_POST)){
      $organization = $_POST['organization'];
      $name = $_POST['name'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $archiving_time = $_POST['archiving_time'];
      $priority =$_POST['priority'];
      $this->logic = new Logic();
      $this->logic->orderCreation($this->logic->cleanUserInput($organization), $this->logic->cleanUserInput($name), $this->logic->cleanUserInput($address), $this->logic->cleanUserInput($email), $archiving_time, $priority);
    }
  } // Fin renderSiennaStoragePage() -> Form Stockage

  public function renderAuthenticationForm(){ // For the authentication form
    echo "
    <div id='PageDeConnexion'>
      <div id='Titre'>
        SIENNA
      </div>
      <div id='Sous-titre'>
        CONNEXION PANEL
      </div>
      <div id='form_div'>
        <form action='authentication.php' method='post'>
          <div id='fields'>
            <div id='Username'>
              <input type='text' name='username' id='user_input' placeholder='USERNAME' minlength='7' maxlength='30' required/>
            </div>
            <div id='Password'>
              <input type='password' name='password' id='pass_input' placeholder='PASSWORD' minlength='8' maxlength='20' required/>
            </div>
          </div>
          <input type='submit' style='background:#303030' id='signin-button' value='LOGIN'>
        </form>
      </div>
      <div id='ForgotPassword'>
        <a id='LinkForgotPassword' style='color:#303030' href='mailto:Hadrien.paris@icloud.com'>FORGOT YOUR PASSWORD ?</a>
      </div>
    </div>
    ";
    if (!empty($_POST)){
      $username = $_POST['username']; // récupération de l'email du form html
      $passwd = $_POST['password']; // récupération du mot de passe du form html
      $this->logic = new Logic();
      $this->logic->authentication($this->logic->cleanUserInput($username), $this->logic->cleanUserInput($passwd));
    }
  } // Fin renderAuthenticationForm()

  public function renderSiennaAccountPage(){
    $this->logic = new Logic();
    if(key_exists("user", $_SESSION)){
      echo "
      <div id='explanation'>
        <h2 class='account_title'>
        {$this->logic->getDayTime()}
        {$_SESSION['user']['credential_username']}
        </h2>
      </div>
      ";
    }
    else{
      echo "
      <div id='explanation'>
        <h2 class='account_title'>
        You must be connected in order to see your account, you can log-in in Sienna's webpage footer.
        </h2>
      </div>
      ";
    }
  } // End function renderSiennaAccountPage()

} // End class Displayer
?>
