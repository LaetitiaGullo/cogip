<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/style.css">
    <title>Cogip</title>
</head>

<body>

    <header>
        <div class="navbar">
            <a class="navlink" href="/">Home</a>
            <a class="navlink" href="/?page=invoices">Invoices</a>
            <a class="navlink" href="/?page=contacts">Contacts</a>
            <div class="dropdown">
                <a class="navlink" href="/?page=companies">Companies</a>
                <div class="dropdown-content">
                    <a class="droplink" href="/?page=companies">All</a>
                    <a class="droplink" href="/?page=clients">Clients</a>
                    <a class="droplink" href="/?page=suppliers">Suppliers</a>
                </div>
            </div>
            <a class="navlink" href="#">Disconnect</a>
            <div class="dropdown">
                <a class="navlink" href="/?page=admin">Admin</a>
                <div class="dropdown-content">
                    <a class="droplink" href="/?page=addinvoice">+Invoice</a>
                    <a class="droplink" href="/?page=addcontact">+Contact</a>
                    <a class="droplink" href="/?page=addcompany">+Company</a>
                </div>
            </div>
        </div>
    </header>

    <main>