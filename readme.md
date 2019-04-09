<p align="center">
    <a href="https://sifiks.kodeskillet.com" target="_blank">
        <img src="https://i.ibb.co/fxTRWgL/sifiks4.png" alt="sifiks4" border="0" width="45%">
    </a>
</p>
<p align="center">
    <a href="https://travis-ci.com/flying-coders/SIFIKS" target="_blank">
        <img src="https://travis-ci.com/flying-coders/SIFIKS.svg?branch=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/flying-coders/SIFIKS/?branch=master" target="_blank">
        <img src="https://img.shields.io/scrutinizer/g/flying-coders/SIFIKS.svg" alt="Code Quality">
    </a>
</p>


## About SIFIKS

SIFIKS is a web-based QNA Forum and Information System regarding medical and health topics.

Build in hopes of helping users to find health and medical information such as :

- Sickness
- Medicines
- Healthy Life

And many more.

SIFIKS also allows users to ask questions regarding medical and health matters, which will be answered by Doctors with matched specialties.

Users also have ability to search for the nearest hospitals with the desired criteria.


## Prerequisites

To run SIFIKS on your local system, make sure your system have the following requirements installed :

- **[MySQL](https://mysql.com)**
- **[Node.js](https://nodejs.org/en/)**
- **[Composer](https://getcomposer.org/)**

For documentation, installation or license information, please visit the provided links.

## Setup
Clone the repository to your desired directory by doing

    git clone https://github.com/flying-coders/SIFIKS.git

Once it finished, you will find a file called `.env.example` inside the root directory, rename it to `.env` , this will be your root environment configuration file.

After that, go ahead and create a new database in your MySQL Server with any name you want.

Once you've made a database, open up your `.env` file, and modify the environment variables, see bellow example :

    DB_HOST=127.0.0.1       // Your database host,
    DB_PORT=3306            // Your database port number,
    DB_DATABASE=homestead   // the database name you have made earlier,
    DB_USERNAME=homestead   // Your database username,
    DB_PASSWORD=secret      // and password
    
these variables are the only ones you need to modify, the rest you can leave.

However if you have your own API keys for each Social Media OAuth feature that we have, you might as well want to modify them with yours, see bellow example : 

    FB_CLIENT_ID=           // YOUR APP CLIENT ID
    FB_CLIENT_SECRET=       // YOUR APP SECRET KEY
    FB_CLIENT_URL=http://YOUR_HOST/oauth/facebook/callback
    
    TWITTER_CLIENT_ID=
    TWITTER_CLIENT_SECRET=
    TWITTER_CLIENT_URL=http://YOUR_HOST/oauth/twitter/callback
    
    GOOGLE_CLIENT_ID=
    GOOGLE_CLIENT_SECRET=
    GOOGLE_CLIENT_URL=http://YOUR_HOST/oauth/google/callback

<br>
After that, open up your terminal in SIFIKS root directory then run

    php artisan key:generate
    
This will generate a `base:64` key for your environment `APP_KEY`

<br>
After that, you will need to install the dependencies, to do this, open up your terminal inside SIFIKS root directory then run
    
    composer install
and
    
    npm install
this will install all the dependencies inside composer.json which is a ``composer`` dependency list, and package.json for ``npm``
>However in order to run composer and npm , you have to be <b>online</b>.

<br>
<br>
Once you've done that now you can start migrating the database by doing
    
    php artisan migrate
    
This will migrate the entire SIFIKS database migrations stored inside the [/database/migrations](https://github.com/flying-coders/SIFIKS/tree/master/database/migrations) folder.

Speaking of database , inside [/database/databank](https://github.com/flying-coders/SIFIKS/tree/master/database/databank) folder, we've provided you with databanks for populating your tables with boiler data, which is `cities` and `doctor_specializations`, each `.sql` files represent their table names. Of course it is your decision on to using them or not, but if you do want to use them, all you need to do is execute them on your DBMS SQL console with only modifying the database name like the example bellow : 

    # Modify this line based on your database name. e.g 'USE db_sifiks'
    
    USE db_name;
    
<br>
Thats it, now you can run SIFIKS by doing 
    
    php artisan serve

on your terminal, then open up `localhost:8000` on your browser.

<br>
Everything should be working by now, however to access the admin CPanel you will need to have an Administrative account, which we do not provide, in that case, you will need to make it on your own.
<br>
<br>
To do that open up your terminal again, then run
    
    php artisan tinker

<br>
Once you're inside Tinker, do as the example shown bellow, 
    
    $new = new App\Admin                    // This will create a new instance of App\Admin
    
    $new->name = "Your Name"                // Your account name
    
    $new->email = "youremail@example.com"   // An email 
    
    $new->password = Hash::make('secret')   // and a Hashed password for you to login
    
    $new->save()                            // save the new instance
    

Great, now you can try and login as admin by going to `localhost:8000/admin/login`

## License

SIFIKS is open-source project licensed under the [MIT license](https://opensource.org/licenses/MIT).
