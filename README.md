# testDKGroup
<ol>
  <li>git clone project from repository</li>
  <li>composer install</li>
  <li>duplicate .env.exeemple and rename it to .env</li>
  <li>create database testDKGroup </li>
  <li>php artisan migrate</li>
  <li>php artisan serve</li>

  
</ol>

<hr>

<ol>
            <li>I create the form contact </li>
            <li>I create the Model Contact and the controller contactController </li>
            <li>I creat the entity contact on database testDKGroup</li>
            <li>I Make an event  and Listiner </li>
                <ul>
                    <li>the role of the event is to Fire request and send an Emil notification to olivia.declerck@dkgroup.fr</li>
                    <li>the role of listener is to listen will a request is send succussfully to the database</li>
                </ul>
</ol>
<strong>
Note
</strong>
<p>
to send an email to olivia.declerck@dkgroup.fr we need to Change the following Settings of .env file
 
        
</p>
           <ul>
        <li>
        MAIL_MAILER=smtp

        </li>
<li>MAIL_HOST=smtp</li>
<li>MAIL_PORT=1025</li>
<li>MAIL_USERNAME="Your user Name"</li>
<li>MAIL_PASSWORD="Your Password"</li>
<li>MAIL_ENCRYPTION=null</li>
<li>MAIL_FROM_ADDRESS=null</li>

        </ul>
