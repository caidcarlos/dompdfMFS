<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dfac54d038.js" crossorigin="anonymous"></script>
    <title>I-130</title>
    <style>
.sabana{

}

.flex{
    display: flex;
}

.w-1-3{
    width: 33.3%;
}

.w-2-3{
    width: 66.6%;
}

.w-1-6{
    width: 16.66%;
}

.w-5-6{
    width: 83.33%;
}

.w-1-4{
    width: 25%;
}

.w-1-7{
    width: 17.7%;
}

.w-1-8{
    width: 12.5%;
}

.w-7-8{
    width: 87.5%;
}

.w-1-2{
    width: 50%;
}
.w-3-4{
    width: 75%;
}
.w-full{
    width: 100%;
}

.bg-color-blue{
    background-color: blue;
}

.bg-color-aqua{
    background-color: aqua;
}

.bg-color-red{
    background-color: red;
}

.bg-color-gray{
    background-color: #B9B9B9;
}

.header{
    margin-bottom: 5px;
}

.sec-title{
    padding: 5px;
    font-weight: bold;
    margin-top: 3px;
/*    background-color: gray; */
    background-color: #E0E0E0;
    font-size: 1rem;
    border: 2px solid black
}

.sec-title-nob{
    padding: 5px;
/*    background-color: gray; */
    background-color: #E0E0E0;
    font-size: 1rem;
    width: 100%;
    height:auto;
}

.text-center{
    text-align: center;
}

.text-right{
    text-align: right;
}

h2{
    font-weight: normal;
    font-size: 1.25rem;
    margin-top: 0;
    margin-bottom: 0;
}

h3{
    font-weight: normal;
    font-size: .75rem;
    margin-top: 0;
    margin-bottom: 0;
}

.font-bold{
    font-weight: bold;
}

.border-bottom{
    border-bottom: 1px solid black;
}

.border-r{
    border-right: 1px solid black;
}

.border-l{
    border-left: 1px solid black;
}

.border-top{
    border-top: 1px solid black;
}

.mt-1{
    margin-top: 0.25em;
}

.mt-2{
    margin-top: 0.5em;
}

.ml-2{
    margin-left: 0.5em;
}

.mr-2{
    margin-right: 0.5em;
}

.mr-1{
    margin-right: 0.25em;
}

.mt-3{
    margin-top: 0.75em;
}

.mt-4{
    margin-top: 1em;
}

.mt-6{
    margin-top: 1.5em;
}

.mt-8{
    margin-top: 2em;
}

.mt-10{
    margin-top: 2.5em;
}

.mt-12{
    margin-top: 3em;
}

.mt-14{
    margin-top: 3.5em;
}

.mt-16{
    margin-top: 4em;
}

.mt-18{
    margin-top: 4.5em;
}

.mt-20{
    margin-top: 5em;
}

.mt-24{
    margin-top: 6em;
}

.mt-28{
    margin-top: 7em;
}

.mt-32{
    margin-top: 8em;
}

.mt-40{
    margin-top: 10em;
}

.mt-48{
    margin-top: 12em;
}

.mt-50{
    margin-top: 12.5em;
}

.mt-52{
    margin-top: 13em;
}

.mt-52{
    margin-top: 15em;
}

.notes{
    font-weight: bold;
    font-size: 1em;
    padding-top: 4px;
    padding-bottom: 4px;
}

.inputs{
    border: 1px solid black;
    background-color: white;
    width: 100%;
    height: 1rem;
    padding: 2px;
}

.px-4{
    padding-left: 1rem;
    padding-right: 1rem;
}

.px-1{
    padding-left: .25rem;
    padding-right: .25rem;
}

.py-4{
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.p-4{
    padding-left: 1rem;
    padding-right: 1rem;
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.mx-4{
    margin-left: 1rem;
    margin-right: 1rem;
}

.my-2{
    margin-top: .5rem;
    margin-bottom: .5rem;
}

.ml-4{
    margin-left: 1rem;
}

.ml-1{
    margin-left: 0.25rem;
}

.pl-1{
    padding-left: 0.25rem;
}

.mb-1{
    margin-bottom: 0.25rem;
}

.mb-2{
    margin-bottom: .5rem;
}

.mb-4{
    margin-bottom: 1rem;
}

.ml-2{
    margin-left: 0.5rem;
}

.pb-2{
    padding-bottom: 0.5rem;
}

.pb-3{
    padding-bottom: 0.75rem;
}

.pl-4{
    padding-left: 1rem;
}

.pr-4{
    padding-right: 1rem;
}

.labels{
    font-size: .75rem;
}

.justify-around{
    justify-content: space-around;
}

.justify-between{
    justify-content: space-between;
}

.justify-center{
    justify-content: center;
}

.justify-start{
    justify-content: start;  
}

.justify-end{
    justify-content: end;
}

.justify-right{
    justify-content: right;
}

input.checkboxState{
    width: 8px;
    height: 8px;
}

.input-cell{
    border: 1px solid #D9D9D9;
    background-color: white;
    width: .8rem;
    height: 1rem;
    padding: 2px;
}

.input-cell-thin{
    border: 1px solid #D9D9D9;
    background-color: white;
    width: .45rem;
    height: .55rem;
    padding: 2px;
}

.border{
    border: 1px solid black;
}

.border-b{
    border-bottom: 1px solid black;
}

.text-center{
    text-align: center;
}

.separator{
    border-top: 5px solid black;
    height: 8px;
    border-bottom: 2px solid black;
}

.text{
    font-size: .75rem;
}

.link{
    color: blue;
    text-decoration: underline;
    font-size: .5rem;
}

.italic{
    font-style: italic;
}

.py-1{
    padding-top: .25rem;
    padding-bottom: .25rem;
}

.my-1{
    margin-top: .25rem;
    margin-bottom: .25rem;
}

.py-2{
    padding-top: .5rem;
    padding-bottom: .5rem;
}

.py-3{
    padding-top: .75rem;
    padding-bottom: .75rem;
}

.py-4{
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.w-1-10{
    width: 10%;
}

.w-3-10{
    width: 30%;
}

.w-4-10{
    width: 40%;
}

.w-6-10{
    width: 60%;
}

.w-7-10{
    width: 70%;
}

.w-8-10{
    width: 80%;
}

.w-9-10{
    width: 90%;
}

.text-sm{
    font-size: .6rem;
}

.center-v{
    align-items: center;
}

.p-1{
    padding: .25rem;
}

.p-2{
    padding: .5rem;
}

.text-right{
    text-align: right;
}

.page-break {
    page-break-before: always;
}

table{
    width: 100%;
}

footer {
    position: fixed; 
    bottom: -60px; 
    left: 0px; 
    right: 0px;
    height: 50px;
    color: black;
    border-top: solid 2px black;
}

</style>

</head>
<body>
    <?php
        $logo = 'c:/xampp/htdocs/mfs/public/img/Seal_of_the_United_States_Department_of_Homeland_Security.svg.png';
        $logoBase64 = "data:image/png;base64," . base64_encode(file_get_contents($logo));
        $flecha = 'c:/xampp/htdocs/mfs/public/img/flecha.png';
        $flechaBase64 = "data:image/png;base64," . base64_encode(file_get_contents($flecha));
        $play = 'c:/xampp/htdocs/mfs/public/img/play.png';
        $playBase64 = "data:image/png;base64," . base64_encode(file_get_contents($play));
    ?>
    <div class="sabana">
        <div class="flex header">
            <div class="w-1-4" style="float:left;">
                <img src="{{$logoBase64}}" alt="US Department of Homeland Security" width="70px">
            </div>
            <div class="w-1-2 text-center mb-1" style="float:center; margin-left:25%;">
                <h2 class="font-bold">Application for Travel Document</h2>
                <p class="font-bold" style="margin-top:5px; font-size:0.85rem; margin-bottom:0px;">Department of Homeland Security</p>
                <p style="font-size:0.8rem; margin-top:0px;">U.S. Citizenship and Immigration Services</p>
            </div>
            <div class="text-center mt-4" style="float:right; margin-left:80%;">
                <h3 class="font-bold">USCIS</h3>
                <h3 class="font-bold">Form I-131</h3>
                <h3>OMB No. 1615-0013</h3>
                <h3>Expires 04/30/2022</h3>
            </div>
        </div>
        <div class="separator" style="margin-top:4.75rem;">
            
        </div>

        <div class="flex mt-2">
            <div class="border" style="float:left; width: 40%;">
                <div class="">
                    <div class="text text-center border-r font-bold bg-color-gray py-4 px-1" style="float:left; width: 15%;">
                        For <br>
                        USCIS <br>
                        Use <br>
                        Only
                    </div>
                    <div class="text-center text font-bold"  style="margin-left:15%; width: 85%;">
                        Receipt
                    </div>
                </div>
                <div class="w-full text border-bottom border-top" style="margin-top: 4.65rem;">
                    <div style="float: left; width:7%;">
                        <input type="checkbox" class="checkboxState mt-1">
                    </div>
                    <div style="margin-left:8%;" class="mt-2">
                        <strong>Document Hand Delivered</strong><br>
                    </div>
                    <div class="ml-4 mt-2 text-sm mb-2" style="margin-left:8%; margin-top:.75rem;">
                        By:_________________ Date: _____/_____/_______
                    </div>
                </div>
                <div class="text w-full mb-2">
                    <div class="text-center font-bold mt-1">
                        Document Issued
                    </div>
                    <div class="mt-2 text-sm w-full">
                        <div class="w-1-2" style="float:left;">
                            <div class="flex">
                                <div style="float:left; width: 10%;">
                                    <input type="checkbox" class="checkboxState">
                                </div>
                                <div class="ml-1 mt-1" style="margin-left:11%; width: 89%;">
                                    Re-entry Permit<i>(Update "Mail To" Section)</i>
                                </div>
                            </div>
                            <div class="flex mt-1">
                                <div style="float:left; width: 10%;">
                                    <input type="checkbox" class="checkboxState">
                                </div>
                                <div class="ml-1 mt-1" style="margin-left:11%; width: 89%;">
                                    Single Advance Parole
                                </div>
                            </div>
                        </div>
                        <div class="w-1-2 mb-1" style="margin-left: 50%">
                            <div class="flex">
                                <div style="float:left; width: 10%;">
                                    <input type="checkbox" class="checkboxState">
                                </div>
                                <div class="ml-1 mt-1" style="margin-left:12%; width: 88%;">
                                    Refugee Travel Document <br> <i>(Update "Mail To" Section)</i>
                                </div>
                            </div>
                            <div class="flex mt-1">
                                <div style="float:left width: 10%;">
                                    <input type="checkbox" class="checkboxState">
                                </div>
                                <div class="ml-1 mt-1" style="margin-left:12%; width: 88%;">
                                    Multiple Advance Parole <br> <i>Valid Until: ___/___/____</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top border-bottom border-r" style="float:center; margin-left:40%; width: 39%;">
                <div class="text-center font-bold text">
                    Action Block
                </div>
                <div class="border-top mb-2" style="margin-top:8.5rem;">
                    <div class="w-full">
                        <div class="mt-4 text font-bold text-center" style="float:left; width: 27%;">
                            Mail To <br>
                            <i>(Re-entry & Refugee <br> Only)</i>
                        </div>
                        <div class="mt-2 text"  style="margin-left:27%; width: 73%;">
                            <div class="mt-2 text">
                                <div style="float:left; width:10%;">
                                    <input type="checkbox" class="checkboxState">
                                </div>
                                <div class="mt-1" style="margin-left: 10%; width:90%;">
                                    Address in <i>Part 1</i>
                                </div>
                            </div>
                            <div class="mt-2 text">
                                <div style="float:left; width:10%;">
                                    <input type="checkbox" class="checkboxState">
                                </div>
                                <div class="mt-1" style="margin-left: 10%; width:90%;">
                                    US Consulate at:___________
                                </div>
                            </div>
                            <div class="mt-2 text">
                                <div style="float:left; width:10%;">
                                    <input type="checkbox" class="checkboxState">
                                </div>
                                <div class="mt-1" style="margin-left: 10%; width:90%;">
                                    Intl DHS Ofc at:___________
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ml-2 border" style="float:right; margin-left:80%; width:20%;">
                <div class="mt-4 font-bold text text-center">
                    To Be Completed <br>by an <i>Attorney/<br>Representative,</i><br>if any.
                </div>
                <div class="flex mt-4 mb-4 text border-bottom">
                    <div class="" style="float:left; width: 10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text ml-2 mt-1 mb-2" style="margin-left:10%; width: 90%;">
                        <div class="ml-1">
                            Fill in box if G-28 is <br>
                            attached to represent <br>
                            the applicant.
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="text text-center">
                        Attorney State <br>
                        Lincense Number:
                    </div>
                    <div class="text-center text mt-8" style="margin-bottom: .65rem;">
                        __________________
                    </div>
                </div>
            </div>
        </div>
        <div class="text" style="font-size:0.9rem;">
            <div>
                &nbsp;<img src="{{$playBase64}}" alt=">" width="10px"> <strong>Start Here.</strong> Type or Print in Black Ink
            </div>
        </div>
        <div class="mt-2 border sec-title-nob font-bold">
            Part 1. Information About You
        </div>
        <!--Comienzo de columnas, página 1 -->
        <div>
            <!--Columna 1, página 1 -->
            <div class="mt-2" style="float:left; width:48%;">
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.a.
                    </div>
                    <div class="" style="float:center; margin-left: 10%; width: 25%;">
                        Family Name <br>
                        <i>(Last Name)</i>
                    </div>
                    <div class="" style="float: right; margin-left: 35%; width: 65%;">
                        <input type="text w-full" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-10">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.b.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 25%;">
                        Given Name <br>
                        <i>(First Name)</i>
                    </div>
                    <div class="" style="float:right; margin-left:35%; width: 65%;">
                        <input type="text w-full" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-10">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.c.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 25%;">
                        Middle Name
                    </div>
                    <div class="" style="float:right; margin-left:10%; width:65%;">
                        <input type="text w-full" class="inputs">
                    </div>
                </div>
                <div class="sec-title-nob italic mt-8"  style="height:1.1rem;">
                    <div class="font-bold text" style="float:left;">
                        Physical Address
                    </div>
                    <div class="link mt-2 font-bold" style="float:right;">
                        (USPS ZIP Code Lookup)
                    </div>
                </div>
                <div class="mt-2">
                    <div class="font-bold text w-1-10" style="float:left;">
                        2.a.
                    </div>
                    <div class="text" style="margin-left:10%; width: 90%;">
                        In care of Name <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        2.b.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 25%;">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="w-full" style="margin-left:35%; width: 65%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.c.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Apt.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Ste.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:40%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Flr.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="w-full" style="width: 45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        2.d.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 25%;">
                        City or Town
                    </div>
                    <div class="w-full" style="margin-left:35%; width:65%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.e.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 15%;">
                        State
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                    <div style="width: 5%; float:center; margin-left:40%;">

                    </div>
                    <div class="font-bold" style="width: 10%; float:center; margin-left:45%;">
                        2.f.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:55%;">
                        ZIP Code
                    </div>
                    <div class="w-full" style="width: 30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.g.
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float: left;">
                        2.h.
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Province
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        2.i.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        Country
                    </div>
                    <div class="w-full" style="width: 75%; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
            </div>
    
            <!-- Fin columna 1, empieza columna 2-->
            <div class="mt-2" style="margin-left:52%; float:right; width:48%;">
                <div class="italic mt-1 font-bold sec-title-nob">
                    Other Information
                </div>
                <div class="mt-2 text w-full">
                    <div class="w-1-10 font-bold" style="float:left;">
                        3.
                    </div>
                    <div class="w-9-10 " style="margin-left: 10%;">
                        Alien Registration Number (A-Number)
                    </div>
                    <div class="mt-1">
                        <div style="width:49%; float:left;">
                            &nbsp;
                        </div>
                        <div class="" style="margin-left:49%; width: 5%;">
                            <img src="{{$playBase64}}" alt=">" width="10px" style="float:center;" class="mt-2">
                        </div>
                        <div class="mr-1 font-bold" style="float:center; width:5%; margin-left:54%; font-size:1rem;">
                            A-
                        </div>
                        <div class="border w-full" style="margin-left:59%; width:auto;">
                            <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; float:left; ">&nbsp;</div>
                            <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 15px; float:center;">&nbsp;</div>
                            <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 30px; float:center;">&nbsp;</div>
                            <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 45px; float:center;">&nbsp;</div>
                            <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 60px; float:center;">&nbsp;</div>
                            <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 75px; float:center;">&nbsp;</div>
                            <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 90px; float:center;">&nbsp;</div>
                            <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 105px; float:center;">&nbsp;</div>
                            <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 120px; ">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        4.
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        Country of Birth <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        5.
                    </div>
                    <div class="w-9-10" style="margin-left:10%">
                        Country of Citizenship <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        6.
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        Class of Admission <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        7.
                    </div>
                    <div class="mt-1" style="width: 15%; float:center; margin-left:10%;">
                        Gender
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <div style="float:left; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="width:50%; margin-left:35%;">
                            Male
                        </div>
                    </div>
                    <div class="" style="width: 15%; margin-left:40%;">
                        <div style="float:left; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="width:50%; margin-left:35%;">
                            Female
                        </div>
                    </div>
                </div>
                <div class="mt-2 text w-full">
                    <div class="w-1-10 font-bold mt-1"  style="float:left;">
                        8.
                    </div>
                    <div class="mt-1" style="float:center; margin-left:10%; width:30%;">
                        Date of Birth
                    </div>
                    <div class="italic mt-1" style="float:center; margin-left:40%; width:25%;">
                        (mm/dd/yyyy)
                    </div>
                    <div style="float:center; margin-left:65%; width:3%;">
                        <img src="{{$playBase64}}" alt=">" width="10px" style="float:center;" class="mt-2">
                    </div>
                    <div style="margin-left:68%; width:32%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-2 text w-full">
                    <div class="w-1-10 font-bold" style="float:left;">
                        9.
                    </div>
                    <div class="w-9-10" style="margin-left: 10%;">
                        U.S. Social Security Number <i>(if any)</i>
                    </div>
                </div>
                <div class="mt-1">
                    <div style="width:54%; float:left;">
                        &nbsp;
                    </div>
                    <div class="flex font-bold justify-right" style="float:center; margin-left:54%; width: 5%;">
                        <img src="{{$playBase64}}" alt=">" width="10px" class="mt-2">
                    </div>
                    <div class="border w-full" style="margin-left:59%; width:auto;">
                        <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; float:left; ">&nbsp;</div>
                        <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 15px; float:center;">&nbsp;</div>
                        <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 30px; float:center;">&nbsp;</div>
                        <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 45px; float:center;">&nbsp;</div>
                        <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 60px; float:center;">&nbsp;</div>
                        <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 75px; float:center;">&nbsp;</div>
                        <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 90px; float:center;">&nbsp;</div>
                        <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 105px; float:center;">&nbsp;</div>
                        <div style="border: solid 1px #B9B9B9; height:20px; width: 15px; margin-left: 120px; ">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">&nbsp;</div>

        <footer>
            <div class="text" style="float:left; text-align:left; margin-left:-48%;">
                Form I-131 04/24/19 C
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 1 of 5
            </div>
        </footer>

        <div class="page-break"></div>
        <!--Página 2 -->
        <div class="separator">

        </div>
        <div class="w-full mt-2 sec-title-nob font-bold border">
            Part 2. Application Type
        </div>
        <div class="mt-2">
            <div class="" style="float:left; width:48%;">
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.a.
                    </div>
                    <div class="w-1-10 font-bold" style="margin-left:10%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="" style="margin-left:20%; width: 80%">
                        I am a permanent resident or conditional resident of <br>
                        the United States, and I am applying for a reentry <br>
                        permit.
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.b.
                    </div>
                    <div class="w-1-10 font-bold" style="float:center; margin-left:10%">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="" style="margin-left:20%; width: 80%">
                        I now hold U.S. refugee or asylee status, and I am <br> 
                        applying for a Refugee Travel Document.
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.c.
                    </div>
                    <div class="w-1-10 font-bold" style="float:center; margin-left:10%">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="" style="width: 80%; margin-left:20%">
                        I am a permanent resident as a direct result of refugee <br>
                        or asylee status, and I am applying for a Refugee <br>
                        Travel Document.
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.d.
                    </div>
                    <div class="w-1-10 font-bold" style="float:center; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="" style="width: 80%" style="margin-left:20%;">
                        I am applying for an Advance Parole Document to <br> 
                        allow me to return to the United States after <br>
                        temporary foreign travel.
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.e.
                    </div>
                    <div class="w-1-10 font-bold" style="float:center; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="" style="width: 80%" style="margin-left:20%;">
                        I am outside the United States, and I am applying for <br>
                        an Advance Parole Document.
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.f.
                    </div>
                    <div class="w-1-10 font-bold" style="float:center; margin-left:10%">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="" style="width: 80%" style="margin-left:20%;">
                        I am applying for an Advance Parole Document for a <br>
                        person who is outside the United States
                    </div>
                </div>
                <div class="w-full text mt-4">
                    If you checked box "1.f." provide the following information <br>
                    about that person in 2.a. through 2.p.
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.a.
                    </div>
                    <div class="" style="float:center; width: 25%; margin-left:10%;">
                        Family Name <br>
                        <i>(Last Name)</i>
                    </div>
                    <div class="w-full" style="margin-left:35%; width: 65%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.b.
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%">
                        Given Name <br>
                        <i>(First Name)</i>
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.c.
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-2 text w-full flex">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.d.
                    </div>
                    <div class="w-1-4" style="float:center; margin-left:10%;">
                        Date of Birth
                    </div>
                    <div class="text italic" style="float:center; margin-left:35%; width:30%">
                        (mm/dd/yyyy)
                    </div>
                    <div class="flex" style="width: 3%; float:center; margin-left:65%">
                        <img src="{{$playBase64}}" alt=">" class="mt-2" width="10px">
                    </div>
                    <div class="flex" style="width: 31%; margin-left:69%">
                        <input type="text" class="inputs">
                    </div>
                </div>
            </div>
            <div class="" style="float: right; width:48%; margin-left:52%">
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.e.
                    </div>
                    <div class="w-9-10"  style="margin-left:10%;">
                        Country of Birth <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold"  style="float:left;">
                        2.f.
                    </div>
                    <div class="w-9-10" style="margin-left:10%">
                        Country of Citizenship <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.g.
                    </div>
                    <div class="" style="width: 40%; float:center; margin-left:10%;">
                        Daytime Phone Number
                    </div>
                    <div class="mr-1" style="float:center; width:3%; height:1.15rem; margin-left:50%;">
                        <div class="mr-1 ml-1">
                            (
                        </div>
                    </div>
                    <div class="border" style="float:center; width:12%; height:1.15rem; margin-left:53%;">
                        &nbsp;
                    </div>
                    <div class="" style="float:center; width:3%; height:1.15rem; margin-left:65%;">
                        <div class="ml-1">
                            )
                        </div>
                    </div>
                    <div class="border ml-1" style="float:center; width:12%; height:1.15rem; margin-left:68%;">
                        &nbsp;
                    </div>
                    <div class="ml-1 mr-1" style="float:center; width:3%; height:1.15rem; margin-left:80%;">
                        <div class="ml-1 mr-1">
                            -
                        </div>
                    </div>
                    <div class="border" style="width:17%; height:1.15rem; margin-left:83%;">
                        &nbsp;
                    </div>
                </div>
                <div class="mt-2 sec-title-nob font-bold italic">
                    Physical Address (If checked box 1.f.)
                </div>
                <div class="mt-2 flex text">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.h.
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        In Care of Name <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.i.
                    </div>
                    <div class="" style="width: 25%;" style="float:center; margin-left:10%">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.j.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Apt.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Ste.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:40%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Flr.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="w-full" style="width: 45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        2.k.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 25%;">
                        City or Town
                    </div>
                    <div class="w-full" style="margin-left:35%; width:65%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.l.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 15%;">
                        State
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                    <div style="width: 5%; float:center; margin-left:40%;">

                    </div>
                    <div class="font-bold" style="width: 10%; float:center; margin-left:45%;">
                        2.m.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:55%;">
                        ZIP Code
                    </div>
                    <div class="w-full" style="width: 30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.n.
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float: left;">
                        2.o.
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Province
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        2.p.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        Country
                    </div>
                    <div class="w-full" style="width: 75%; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold border sec-title-nob" style="margin-top:27rem;">
            Part 3. Processing Information
        </div>
        <div class="mt-2">
            <div class="mt-2 text" style="float:left; width:48%;">
                <div class="">
                    <div class="font-bold w-1-10" style="float:left;">
                        1.
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        <div>
                            Date of Intended Departure
                        </div>
                    </div>
                </div>
                <div class="mt-1">
                    <div class="w-4-10" style="float:left;">
                        &nbsp;
                    </div>
                    <div class="italic mt-1 mr-1" style="float:center; margin-left:40%; width:28%;">
                        (mm/dd/yyyy)
                    </div>
                    <div class="mr-1 mt-1"  style="float:center; width:3%; margin-left:68%;">
                        <img src="{{$playBase64}}" alt=">" class="mt-2" width="10px">
                    </div>
                    <div class="" style="margin-left:72%; width:auto;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-2">
                    <div class="font-bold w-1-10" style="float:left;">
                        2.
                    </div>
                    <div class="" style="margin-left:10%; width:70%; float:center;">
                        Expected Length of Trip <i>(in days)</i>
                    </div>
                    <div class="" style="margin-left:80%; width:20%;">
                         <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex mt-2">
                    <div class="font-bold w-1-10" style="float:left;">
                        3.a.
                    </div>
                    <div class="w-9-10" style="margin-left:10%">
                        Are you, or any person included in this application, now <br>
                        in exclusion, deportation, removal, or rescission 
                        proceedings?
                        <div class="">
                            <div class="" style="width: 70%; float:left;">
                            </div>
                            <div class="" style="width: 5%; margin-left:70%; float:center;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="width: 10%; margin-left:75%; float:center;">
                                <div class="ml-1">
                                    Yes
                                </div>
                            </div>
                            <div class="" style="width: 5%; margin-left:85%; float:center;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="ml-1 mt-2" style="width: 10%; margin-left:90%;">
                                <div class="ml-1">
                                    No
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-2">
                    <div class="font-bold w-1-10" style="float:left;">
                        3.b.
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        If "Yes", Name of DHS office:
                    </div>
                </div>
                <div class="mt-1">
                    <div class="font-bold w-1-10" style="float:left;">
                        &nbsp;
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
            </div>
            <div class="text" style="float:right; width:48%; marging-left:52%;">
                <div class="mt-2">
                    <div class="font-bold w-1-10" style="float:left;">
                        4.a.
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        Have you ever before been issued a reentry permit or 
                        Refugee Travel Document? <i>(If "Yes" give the following 
                        information for the last document issued to you):</i>
                        <div class="">
                            <div class="" style="width: 70%; float:left;">
                            </div>
                            <div class="" style="width: 5%; margin-left:70%; float:center;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="width: 10%; margin-left:75%; float:center;">
                                <div class="ml-1">
                                    Yes
                                </div>
                            </div>
                            <div class="" style="width: 5%; margin-left:85%; float:center;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="ml-1 mt-2" style="width: 10%; margin-left:90%;">
                                <div class="ml-1">
                                    No
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2 text w-full flex">
                    <div class="w-1-10 font-bold" style="float:left;">
                        4.b.
                    </div>
                    <div class="w-1-4" style="float:center; margin-left:10%;">
                        Date Issued
                    </div>
                    <div class="text italic" style="float:center; margin-left:35%; width:30%">
                        (mm/dd/yyyy)
                    </div>
                    <div class="flex" style="width: 3%; float:center; margin-left:65%">
                        <img src="{{$playBase64}}" alt=">" class="mt-2" width="10px">
                    </div>
                    <div class="flex" style="width:29%; margin-left:71%">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex mt-2">
                    <div class="font-bold w-1-10" style="float:left;">
                        4.c.
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        Disposition <i>(attached, lost, etc.):</i> <br>
                    </div>
                </div>
                <div class="mt-1">
                    <div class="font-bold w-1-10" style="float:left;">
                        &nbsp;
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold text" style="margin-top: 12.5rem; font-size:.8rem;">
            If you are applying for a non-DACA related Advance Parole Document, skip to Part 7; <i>DACA recipients must complete Part 4 
            before skipping to Part 7.</i>
        </div>

        <footer>
            <div class="text" style="float:left;">
                Form I-131 04/24/19 C
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 2 of 5
            </div>
        </footer>

        <div class="page-break"></div>

        <!-- Página 3 -->
        <div class="separator">

        </div>
        <div class="mt-2 border sec-title-nob">
            <strong>Part 3. Processing Information</strong> <i>(continued)</i>
        </div>
        <div class="mt-2 w-full">
            <div class="" style="float:left; width:48%">
                <div class="text w-full">
                    Where do you want this travel document sent? <i>(Check one)</i>
                </div>
                <div class="mt-2 flex">
                    <div class="text font-bold w-1-10" style="float:left;">
                        5.
                    </div>
                    <div class="w-1-10" style="float:center; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text" style="width: 80%; margin-left:20%;">
                        To the U.S. address shown in <strong>Part 1 (2.a through
                        2.i.)</strong> of this form.
                    </div>
                </div>
                <div class="mt-2 flex">
                    <div class="text font-bold w-1-10" style="float:left;">
                        6.
                    </div>
                    <div class="w-1-10" style="float:center; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text" style="width: 80%; margin-left:20%;">
                        To a U.S. Embassy or consulate at:
                    </div>
                </div>
                <div class="mt-2 flex">
                    <div class="text font-bold w-1-10" style="float:left;">
                        6.a.
                    </div>
                    <div class="text" style="width: 35%; float:center; margin-left:10%">
                        City or Town
                    </div>
                    <div class="text" style="width: 55%; margin-left:45%">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-2">
                    <div class="text font-bold w-1-10" style="float:left;">
                        6.b.
                    </div>
                    <div class="text" style="width: 25%; float:center; margin-left:10%;">
                        Country
                    </div>
                    <div class="text" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-2 flex">
                    <div class="text font-bold w-1-10" style="float:left;">
                        7.
                    </div>
                    <div class="w-1-10" style="float:center; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text" style="width: 80%; margin-left:20%;">
                        To a DHS office overseas at:
                    </div>
                </div>
                <div class="mt-2">
                    <div class="text font-bold w-1-10" style="float:left;">
                        7.a.
                    </div>
                    <div class="text" style="width: 35%; float:center; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text" style="width: 55%; margin-left:45%">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-2 flex">
                    <div class="text font-bold w-1-10" style="float:left;">
                        7.b.
                    </div>
                    <div class="text" style="width: 25%; float:center; margin-left:10%;">
                        Country
                    </div>
                    <div class="text" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="w-full text mt-2">
                    If you checked "6" or "7", where should the notice to pick up
                    the travel document be sent?
                </div>
                <div class="mt-2 flex">
                    <div class="text font-bold w-1-10" style="float:left;">
                        8.
                    </div>
                    <div class="w-1-10"  style="float:center; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text" style="width: 80%; margin-left:20%;">
                        To the address shown in <strong>Part 2 (2.h. through 2.p.)</strong>
                        of this form.
                    </div>
                </div>
                <div class="mt-2 flex">
                    <div class="text font-bold w-1-10" style="float:left;">
                        9.
                    </div>
                    <div class="w-1-10"  style="float:center; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text" style="width: 80%; margin-left:20%;">
                        To the address shown in <strong>Part 3 (10.a. through 10.i.)</strong>
                        of this form.:
                    </div>
                </div>
            </div>
            <div class="" style="width:48%; margin-left:52%; float: right;">
                <div class="mt-2 flex text">
                    <div class="w-1-10 font-bold" style="float:left;">
                        10.a.
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        In Care of Name <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        10.b.
                    </div>
                    <div class="" style="width: 25%;" style="float:center; margin-left:10%">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        10.c.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Apt.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Ste.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:40%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Flr.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="w-full" style="width: 45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        10.d.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 25%;">
                        City or Town
                    </div>
                    <div class="w-full" style="margin-left:35%; width:65%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        10.e.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 15%;">
                        State
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                    <div style="width: 5%; float:center; margin-left:40%;">

                    </div>
                    <div class="font-bold" style="width: 10%; float:center; margin-left:45%;">
                        10.f
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:55%;">
                        ZIP Code
                    </div>
                    <div class="w-full" style="width: 30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        10.g
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float: left;">
                        10.h
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Province
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        10.i
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        Country
                    </div>
                    <div class="w-full" style="width: 75%; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        10.j.
                    </div>
                    <div class="" style="width: 40%; float:center; margin-left:10%;">
                        Daytime Phone Number
                    </div>
                    <div class="mr-1" style="float:center; width:3%; height:1.15rem; margin-left:50%;">
                        <div class="mr-1 ml-1">
                            (
                        </div>
                    </div>
                    <div class="border" style="float:center; width:12%; height:1.15rem; margin-left:53%;">
                        &nbsp;
                    </div>
                    <div class="" style="float:center; width:3%; height:1.15rem; margin-left:65%;">
                        <div class="ml-1">
                            )
                        </div>
                    </div>
                    <div class="border ml-1" style="float:center; width:12%; height:1.15rem; margin-left:68%;">
                        &nbsp;
                    </div>
                    <div class="ml-1 mr-1" style="float:center; width:3%; height:1.15rem; margin-left:80%;">
                        <div class="ml-1 mr-1">
                            -
                        </div>
                    </div>
                    <div class="border" style="width:17%; height:1.15rem; margin-left:83%;">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full font-bold sec-title-nob border" style="margin-top:21.5rem;">
            Part 4. Information About Your Porposed Travel
        </div>
        <div class="mt-2 w-full">
            <div class="" style="width:48%; float:left;">
                <div class="text font-bold w-1-10" style="float:left;">
                    1.a.
                </div>
                <div class="text" style="width: 90%; margin-left:10%;">
                    Purpose of trip. <i>(If you need more space, continue on a
                    separate sheet of paper.)</i>
                </div>
            </div>
            <div class="" style="width:48%; float:right; margin-left:52%;">
                <div class="text font-bold w-1-10" style="float:left;">
                    1.b.
                </div>
                <div class="text" style="width: 90%; margin-left:10%;">
                    List the countries you intend to visit. <i>(If you need more
                    space, continue on a separate sheet of paper.)</i>
                </div>
            </div>
        </div>
        <div class="w-full font-bold sec-title-nob border" style="margin-top:10rem;">
            Part 5. Complete Only If Applying for a Re-entry Permit
        </div>
        <div class="mt-2 w-full">
            <div class="text" style="width: 48%; float:left;">
                Since becoming a permanent resident of the United States (or
                during the past 5 years, whichever is less) how much total time
                have you spent outside the United States?
                <div class="">
                    <div class="" style="width: 48%; float:left;">
                        <div class="mt-2">
                            <div class="text font-bold mt-1" style="width: 15%; float:left;">
                                1.a.
                            </div>
                            <div style="width: 15%; float:center; margin-left:15%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left: 30%; width:70%;">
                                less than 6 months
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="text font-bold mt-1" style="width: 15%; float:left;">
                                1.b.
                            </div>
                            <div style="width: 15%; float:center; margin-left:15%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left: 30%; width:70%;">
                                6 months to 1 year
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="text font-bold mt-1" style="width: 15%; float:left;">
                                1.c.
                            </div>
                            <div style="width: 15%; float:center; margin-left:15%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left: 30%; width:70%;">
                                1 to 2 years
                            </div>
                        </div>
                    </div>
                    <div class="" style="width: 48%; float:right; margin-left:52%;">
                        <div class="mt-2">
                            <div class="text font-bold mt-1" style="width: 15%; float:left;">
                                1.d.
                            </div>
                            <div style="width: 15%; float:center; margin-left:15%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left: 30%; width:70%;">
                                2 to 3 years
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="text font-bold mt-1" style="width: 15%; float:left;">
                                1.e.
                            </div>
                            <div style="width: 15%; float:center; margin-left:15%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left: 30%; width:70%;">
                                3 to 4 years
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="text font-bold mt-1" style="width: 15%; float:left;">
                                1.f.
                            </div>
                            <div style="width: 15%; float:center; margin-left:15%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left: 30%; width:70%;">
                                more than 4 years
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" style="width: 48%; margin-left: 52%; float:right;">
                <div class="text">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%; float:right">
                        Since you became a permanent resident of the United
                        States, have you ever filed a Federal income tax return as
                        a nonresident or failed to file a Federal income tax return
                        because you considered yourself to be a nonresident? <i>(If
                        "Yes" give details on a separate sheet of paper.)</i>
                    </div>
                </div>
                <div class="text" style="margin-top:4rem;">
                    <div class="" style="width: 70%; float:left;">
                    </div>
                    <div class="" style="width: 5%; margin-left:70%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="width: 10%; margin-left:75%; float:center;">
                        <div class="ml-1">
                            Yes
                        </div>
                    </div>
                    <div class="" style="width: 5%; margin-left:85%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="ml-1 mt-2" style="width: 10%; margin-left:90%;">
                        <div class="ml-1">
                            No
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">&nbsp;</div>

        <footer>
            <div class="text" style="float:left;">
                Form I-131 04/24/19 C
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 3 of 5
            </div>
        </footer>

        <div class="page-break"></div>

        <div class="separator">

        </div>
        <div class="mt-2 font-bold sec-title-nob border w-full">
            Part 6. Complete Only If Applying for a Refugee Travel Document
        </div>
        <div class="mt-2 w-full">
            <div class="" style="float:left; width:48%">
                <div class="w-full">
                    <div class="w-1-10 text font-bold" style="float:left;">
                        1.
                    </div>
                    <div class="text flex justify-between" style="width: 90%; margin-left:10%; float:right">
                        Country from which you are a refugee or asylee: <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text font-bold mt-16">
                    If you answer "Yes" to any of the following questions, you
                    must explain on a separate sheet of paper. Include your
                    Name and A-Number on the top of each sheet.
                </div>
                <div class="mt-2 text w-full">
                    <div class="font-bold" style="width: 10%; float:left;">
                        2.
                    </div>
                    <div style="width: 60%; margin-left:10%; float:center;">
                        Do you plan to travel to the country
                        named above?
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:70%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="float:center; width: 10%; margin-left:75%; float:center;">
                        <div class="ml-1">
                            Yes
                        </div>
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:85%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="width: 10%; margin-left:90%;">
                        <div class="ml-1">
                            No
                        </div>
                    </div>
                </div>
                <div class="mt-4 text">
                    Since you were accorded refugee/asylee status, have you ever:
                </div>
                <div class="text w-full mt-2">
                    <div class="w-1-10 text font-bold" style="float:left;">
                        3.a.
                    </div>
                    <div class="text flex justify-between" style="float:center; width:60%; margin-left:10%;">
                        Returned to the country named
                        above?
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:70%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="float:center; width: 10%; margin-left:75%; float:center;">
                        <div class="ml-1">
                            Yes
                        </div>
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:85%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="width: 10%; margin-left:90%;">
                        <div class="ml-1">
                            No
                        </div>
                    </div>
                </div>
                <div class="text w-full mt-2">
                    <div class="w-1-10 text font-bold" style="float:left;">
                        3.b.
                    </div>
                    <div class="text flex justify-between" style="width:90%; margin-left:10%;">
                        Applied for and/or obtained a national passport, passport
                        renewal, or entry permit of that country?
                    </div>
                </div>
                <div class="w-full text mt-1">
                    <div class="text flex justify-between" style="float:left; width:70%;">
                        &nbsp;
                    </div>
                   <div class="" style="float:center; width: 5%; margin-left:70%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="float:center; width: 10%; margin-left:75%; float:center;">
                        <div class="ml-1">
                            Yes
                        </div>
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:85%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="width: 10%; margin-left:90%;">
                        <div class="ml-1">
                            No
                        </div>
                    </div>
                </div>
            </div>
            <div class="" style="width:48%; margin-left:52%; float: right;">
                <div class="mt-2 flex text">
                    <div class="w-1-10 font-bold" style="float:left;">
                        3.c.
                    </div>
                    <div class="w-9-10" style="margin-left:10%;">
                        Applied for and/or received any benefit from such country
                        (for example, health insurance benefits)?                    </div>
                </div>
                <div class="flex text mt-1">
                    <div class="" style="float:left; width:70%;">
                        &nbsp;
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:70%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="float:center; width: 10%; margin-left:75%; float:center;">
                        <div class="ml-1">
                            Yes
                        </div>
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:85%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="width: 10%; margin-left:90%;">
                        <div class="ml-1">
                            No
                        </div>
                    </div>
                </div>
                <div class="text mt-4">
                    Since you were accorded refugee/asylee status, have you, by
                    any legal procedure or voluntary act:
                </div>
                <div class="text w-full mt-2">
                    <div class="w-1-10 text font-bold" style="float:left;">
                        4.a.
                    </div>
                    <div class="text flex justify-between" style="float:center; width:60%; margin-left:10%;">
                        Reacquired the nationality of the
                        country named above?
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:70%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="float:center; width: 10%; margin-left:75%; float:center;">
                        <div class="ml-1">
                            Yes
                        </div>
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:85%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="width: 10%; margin-left:90%;">
                        <div class="ml-1">
                            No
                        </div>
                    </div>
                </div>
                <div class="text w-full mt-2">
                    <div class="w-1-10 text font-bold" style="float:left;">
                        4.b.
                    </div>
                    <div class="text flex justify-between" style="float:center; width:60%; margin-left:10%;">
                        Acquired a new nationality?
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:70%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="float:center; width: 10%; margin-left:75%; float:center;">
                        <div class="ml-1">
                            Yes
                        </div>
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:85%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="width: 10%; margin-left:90%;">
                        <div class="ml-1">
                            No
                        </div>
                    </div>
                </div>
                <div class="text w-full mt-2">
                    <div class="w-1-10 text font-bold" style="float:left;">
                        4.c.
                    </div>
                    <div class="text flex justify-between" style="float:center; width:60%; margin-left:10%;">
                        Been granted refugee or asylee status
                        in any other country?
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:70%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="float:center; width: 10%; margin-left:75%; float:center;">
                        <div class="ml-1">
                            Yes
                        </div>
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:85%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="width: 10%; margin-left:90%;">
                        <div class="ml-1">
                            No
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold sec-title-nob border w-full" style="margin-top: 15rem;">
            Part 7. Complete Only If Applying for a Refugee Travel Document
        </div>
        <div class="w-full mt-2">
            <div class="" style="width:48%; float:left;">
                <div class="w full text">
                    On a separate sheet of paper, explain how you qualify for an 
                    Advance Parole Document, and what circumstances warrant 
                    issuance of advance parole. Include copies of any documents 
                    you wish considered. <i>(See instructions.)</i>
                </div>
                <div class="mt-2 w-full">
                    <div class="w-1-10 text font-bold" style="float:left;"> 
                        1.
                    </div>
                    <div class="text flex justify-between" style="width: 90%; margin-left:10%;">
                      How many trips do you intend to use this document?
                    </div>
                </div>
                <div class="text w-full mt-2">
                    <div class="text font-bold" style="width:40%; float:left;">
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:40%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="float:center; width: 20%; margin-left:45%; float:center;">
                        <div class="ml-1">
                            One Trip
                        </div>
                    </div>
                    <div class="" style="float:center; width: 5%; margin-left:65%; float:center;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-2" style="width: 30%; margin-left:70%;">
                        <div class="ml-1">
                            More than one trip
                        </div>
                    </div>
                </div>
                <div class="w full mt-2 text">
                    If the person intended to receive an Advance Parole Document 
                    is outside the United States, provide the location (City or Town 
                    and Country) of the U.S. Embassy or consulate or the DHS 
                    overseas office that you want us to notify.
                </div>
                <div class="mt-2 w-full">
                    <div class="flex w-full">
                        <div class="w-1-10 text font-bold" style="float:left;">
                            2.a.
                        </div>
                        <div class="text" style="width: 90%; margin-left:10%;">
                            City or Town <br>
                            <input type="text" class="inputs">
                        </div>
                    </div>
                </div>
                <div class="mt-2 w-full">
                    <div class="flex w-full">
                        <div class="w-1-10 text font-bold" style="float:left;">
                            2.b.
                        </div>
                        <div class="text" style="width: 90%; margin-left:10%;">
                            Country <br>
                            <input type="text" class="inputs">
                        </div>
                    </div>
                </div>
                <div class="w full text">
                    If the travel document will be delivered to an overseas office, 
                    where should the notice to pick up the document be sent?:
                </div>
                <div class="mt-2 w-full">
                    <div class="flex w-full mt-2">
                        <div class="w-1-10 text font-bold" style="float:left;"> 
                            3.
                        </div>
                        <div class="text" style="width: 10%; float:center; margin-left: 10%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text" style="width: 80%; margin-left:20%;">
                            To the address shown in <strong>Part 2 (2.h. through 2.p.)</strong>
                            of this form.
                        </div>
                    </div>
                </div>
                <div class="mt-2 w-full">
                    <div class="flex w-full mt-2">
                        <div class="w-1-10 text font-bold" style="float:left;">
                            4.
                        </div>
                        <div class="text" style="width: 10%; margin-left:10%; float:center;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text" style="width: 80%; margin-left:20%;">
                            To the address shown in <strong>Part 7 (4.a. through 4.i.)</strong>
                            of this form.
                        </div>
                    </div>
                </div>
            </div>
            <div class="" style="width: 48%; margin-left:52%; float:right;">
                <div class="text">
                    <div class="w-1-10 font-bold" style="float:left;">
                        4.a.
                    </div>
                    <div class="w-9-10" style="margin-left:10%; float:right;">
                        In Care of Name <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-14">
                    <div class="w-1-10 font-bold" style="float:left;">
                        4.b.
                    </div>
                    <div class="" style="width: 25%;" style="float:center; margin-left:10%">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        4.c.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Apt.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Ste.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:40%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Flr.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="w-full" style="width: 45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        4.d.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 25%;">
                        City or Town
                    </div>
                    <div class="w-full" style="margin-left:35%; width:65%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        4.e.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 15%;">
                        State
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                    <div style="width: 5%; float:center; margin-left:40%;">

                    </div>
                    <div class="font-bold" style="width: 10%; float:center; margin-left:45%;">
                        4.f
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:55%;">
                        ZIP Code
                    </div>
                    <div class="w-full" style="width: 30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        4.g
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float: left;">
                        4.h
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Province
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        4.i
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        Country
                    </div>
                    <div class="w-full" style="width: 75%; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        4.j.
                    </div>
                    <div class="" style="width: 40%; float:center; margin-left:10%;">
                        Daytime Phone Number
                    </div>
                    <div class="mr-1" style="float:center; width:3%; height:1.15rem; margin-left:50%;">
                        <div class="mr-1 ml-1">
                            (
                        </div>
                    </div>
                    <div class="border" style="float:center; width:12%; height:1.15rem; margin-left:53%;">
                        &nbsp;
                    </div>
                    <div class="" style="float:center; width:3%; height:1.15rem; margin-left:65%;">
                        <div class="ml-1">
                            )
                        </div>
                    </div>
                    <div class="border ml-1" style="float:center; width:12%; height:1.15rem; margin-left:68%;">
                        &nbsp;
                    </div>
                    <div class="ml-1 mr-1" style="float:center; width:3%; height:1.15rem; margin-left:80%;">
                        <div class="ml-1 mr-1">
                            -
                        </div>
                    </div>
                    <div class="border" style="width:17%; height:1.15rem; margin-left:83%;">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">&nbsp;</div>

        <footer>
            <div class="text" style="float:left; margin-left:-48%">
                Form I-131 04/24/19 C
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 4 of 5
            </div>
        </footer>


        <div class="page-break"></div>
            <!--página 5-->
        <div class="separator">

        </div>
        <div class="mt-2 sec-title-nob border w-full">
            <div class="font-bold" style="width: 8%; float:left">
                Part 8.
            </div>
            <div style="width:92%; margin-left:8%; font-size:.9rem;">
                <strong>Signature of Applicant</strong> <i>(Read the information on penalties in the Form instructions before completing 
                this Part.)</i> If you are filing for a Re-entry Permit or Refugee Travel Document, you must be in the United States 
                to file this application.
            </div>
        </div>
        <div class="mt-2 w-full text">
            <div class="" style="float:left; width:48%;">
                <div class="w-full">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.a.
                    </div>
                    <div class="" style="width: 90%; margin-left:10%; float:right;">
                        I certify, under penalty of perjury under the laws of the 
                        United States of America, that this application and the 
                        evidence submitted with it is all true and correct. I 
                        authorize the release of any information from my records 
                        that U.S. Citizenship and Immigration Services needs 
                        to determine eligibility for the benefit I am seeking.
                    </div>
                </div>
                <div class="" style="margin-top: 5.75rem;">
                    <div class="w-1-10 font-bold" style="float:left;">
                        &nbsp;
                    </div>
                    <div class="" style="width: 90%; margin-left:10%;">
                        Signature of Applicant
                    </div>
                </div>
                <div class="">
                    <div class="w-1-10 font-bold" style="float:left;">
                        <img src="{{$flechaBase64}}" alt="->" width="20px" class="mt-1">
                    </div>
                    <div class="" style="width: 90%; margin-left:10%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
            </div>
            <div class="" style="float:right; width:48%; margin-left:52%;">
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.b.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width:30%;">
                            Date of Signature
                    </div>
                    <div class="italic" style="width: 25%; float:center; margin-left:40%;">
                        (mm/dd/yyyy)
                    </div>
                    <div class="" style="width: 3%; float:center; margin-left:65%;">
                        <img src="{{$playBase64}}" alt=">" width="10px" class="mt-2">
                    </div>
                    <div class="flex" style="width: 31%; margin-left:69%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="text mt-2">
                        <div class="w-1-10 font-bold" style="float:left;">
                            2.
                        </div>
                        <div class="" style="width: 40%; float:center; margin-left:10%;">
                            Daytime Phone Number
                        </div>
                        <div class="mr-1" style="float:center; width:3%; height:1.15rem; margin-left:50%;">
                            <div class="mr-1 ml-1">
                                (
                            </div>
                        </div>
                        <div class="border" style="float:center; width:12%; height:1.15rem; margin-left:53%;">
                            &nbsp;
                        </div>
                        <div class="" style="float:center; width:3%; height:1.15rem; margin-left:65%;">
                            <div class="ml-1">
                                )
                            </div>
                        </div>
                        <div class="border ml-1" style="float:center; width:12%; height:1.15rem; margin-left:68%;">
                            &nbsp;
                        </div>
                        <div class="ml-1 mr-1" style="float:center; width:3%; height:1.15rem; margin-left:80%;">
                            <div class="ml-1 mr-1">
                                -
                            </div>
                        </div>
                        <div class="border" style="width:17%; height:1.15rem; margin-left:83%;">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="w-full mt-2">
                    <strong>NOTE:</strong> If you do not completely fill out this form or fail to
                    submit required documents listed in the instructions, your
                    application may be denied.
                </div>
            </div>
        </div>
        <div class="font-bold sec-title-nob border w-full" style="margin-top:9rem;">
            Part 9. Information About Person Who Prepared This Application, If Other Than the Applicant
        </div>
        <div class="w-full mt-2">
            <div class="" style="float:left; width:48%;">
                <div class="w-full text">
                    <strong>NOTE:</strong> If you are an attorney or representative, you must 
                    submit a completed Form G-28, Notice of Entry of Appearance 
                    as Attorney or Accredited Representative, along with this 
                    application.
                </div>
                <div class="sec-title-nob italic font-bold mt-2">
                    Preparer's Full Name
                </div>
                <div class="w-full mt-2 text">
                    Provide the following information concerning the preparer:
                </div>
                <div class="w-full mt-2 text">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.a.
                    </div>
                    <div class="" style="width: 90%; margin-left:10%;">
                        Preparer's Family Name <i>(Last Name)</i> <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="w-full mt-2 text">
                    <div class="w-1-10 font-bold" style="float:left;">
                        1.b.
                    </div>
                    <div class="" style="width: 90%; margin-left:10%;">
                        Preparer's Given Name <i>(First Name)</i> <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="w-full mt-2 flex text">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.
                    </div>
                    <div class="" style="width: 90%; margin-left:10%;">
                        Preparer's Business or Organization Name <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="sec-title-nob italic font-bold mt-2">
                    Preparer's Mailing Address
                </div>
                <div class="flex text mt-14">
                    <div class="w-1-10 font-bold" style="float:left;">
                        3.a.
                    </div>
                    <div class="" style="width: 25%;" style="float:center; margin-left:10%">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        3.b.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Apt.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Ste.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:40%;">
                        <div class="mt-1" style="float: left; width:50%;">
                            Flr.
                        </div>
                        <div  style="float: right; width:50%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                    </div>
                    <div class="w-full" style="width: 45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        3.c.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 25%;">
                        City or Town
                    </div>
                    <div class="w-full" style="margin-left:35%; width:65%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        3.d.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width: 15%;">
                        State
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                    <div style="width: 5%; float:center; margin-left:40%;">

                    </div>
                    <div class="font-bold" style="width: 10%; float:center; margin-left:45%;">
                        3.e.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:55%;">
                        ZIP Code
                    </div>
                    <div class="w-full" style="width: 30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        3.f.
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float: left;">
                        3.g.
                    </div>
                    <div class="" style="width: 25%; float:center; margin-left:10%;">
                        Province
                    </div>
                    <div class="w-full" style="width: 65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left">
                        3.h.
                    </div>
                    <div class="" style="width: 15%; float:center; margin-left:10%;">
                        Country
                    </div>
                    <div class="w-full" style="width: 75%; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
            </div>
            <div class="" style="width:48%; float:right; margin-left:52%;">
                <div class="w-full sec-title-nob italic font-bold">
                    Preparer's Contact Information
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        2.
                    </div>
                    <div class="" style="width: 70%; float:center; margin-left:10%;">
                        Preparer's Daytime Phone Number
                    </div>
                    <div class="" style="width: 20%; margin-left:80%;">
                        Extension
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        &nbsp;
                    </div>
                    <div class="" style="float:center; width:3%; height:1.15rem; margin-left:10%;">
                        <div class="mr-1 ml-1">
                            (
                        </div>
                    </div>
                    <div class="border" style="float:center; width:12%; height:1.15rem; margin-left:13%;">
                        &nbsp;
                    </div>
                    <div class="" style="float:center; width:3%; height:1.15rem; margin-left:25%;">
                        <div class="ml-1">
                            )
                        </div>
                    </div>
                    <div class="border ml-1" style="float:center; width:12%; height:1.15rem; margin-left:28%;">
                        &nbsp;
                    </div>
                    <div class="ml-1 mr-1" style="float:center; width:3%; height:1.15rem; margin-left:40%;">
                        <div class="ml-1 mr-1">
                            -
                        </div>
                    </div>
                    <div class="border" style="float:center; width:17%; height:1.15rem; margin-left:43%;">
                        &nbsp;
                    </div>
                    <div class="" style="float:center; width:20%; height:1.15rem; margin-left:60%;">
                        &nbsp;
                    </div>
                    <div class="border" style="width:20%; height:1.15rem; margin-left:80%;">
                        &nbsp;
                    </div>
                </div>
                <div class="flex text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        5.
                    </div>
                    <div class="" style="width: 90%; margin-left:10%;">
                        Preparer's Email Address <i>(if any)</i> <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-2 font-bold">
                    Declaration
                </div>
                <div class="mt-2 text">
                    To be completed by all preparers, including attorneys and <br> 
                    authorized representatives: I declare that I prepared this benefit <br> 
                    request at the request of the applicant, that it is based on all the <br>
                    information of which I have knowledge, and that the <br>
                    information is true to the best of my knowledge.
                </div>
                <div class="mt-2 text">
                    <div class="w-1-10 font-bold" style="float:left;">
                        6.a.
                    </div>
                    <div class="" style="float:center; width: 30%; margin-left: 10%">
                        Signature<br> of Preparer
                    </div>
                    <div class="" style="width: 60%; margin-left:40%">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="text mt-2">
                    <div class="w-1-10 font-bold" style="float:left;">
                        6.b.
                    </div>
                    <div class="" style="float:center; margin-left:10%; width:30%;">
                            Date of Signature
                    </div>
                    <div class="italic" style="width: 25%; float:center; margin-left:40%;">
                        (mm/dd/yyyy)
                    </div>
                    <div class="" style="width: 3%; float:center; margin-left:65%;">
                        <img src="{{$playBase64}}" alt=">" width="10px" class="mt-2">
                    </div>
                    <div class="flex" style="width: 31%; margin-left:69%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-4 text">
                    <strong>NOTE:</strong> If you require more space to provide any additional 
                    information, use a separate sheet of paper. You must include 
                    your Name and A-Number on the top of each sheet.
                </div>
            </div>
        </div>
        <div class="w-full">&nbsp;</div>

        <footer>
            <div class="text" style="float:left; margin-left:-48%;">
                Form I-131 04/24/19 C
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 1 of 5
            </div>
        </footer>

    </div> <!-- Fin del documento-->
</body>
</html>