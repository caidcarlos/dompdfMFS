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
    background-color: #E0e0e0;
}

.header{
    margin-bottom: 5px;
}

.sec-title{
    padding: 5px;
    font-weight: bold;
    margin-top: 3px;
    background-color: #E0E0E0;
    font-size: 1rem;
    border: 2px solid black
}

.sec-title-nob{
    padding: 5px;
    background-color: #E0E0E0;
    font-size: 1rem;
    width: 100%;
    height:auto;
}

.text-center{
    text-align: center;
}

.text-small{
    font-size: .6rem;
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
    width: 5px;
    height: 5px;
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
    border-top: 7px solid black;
    height: 3px;
    border-bottom: 2px solid black;
}

.text{
    font-size: .75rem;
}

.text2{
    font-size: .8rem;
}

.link{
    color: blue;
    text-decoration: underline;
    font-size: .7rem;
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

h3{
    font-size: .85rem;
    margin-top: 0px;
    margin-bottom: 0px;
}


.cell-thin{
    height: 1rem;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;

}

.cell-thin-b{
    border-left: 1px solid #000;
    border-right: 1px solid #c9c9c9;
}

.cell-thin-m{
    border-left: 1px solid #c9c9c9;
    border-right: 1px solid #c9c9c9;
}

.cell-thin-e{
    border-right: 1px solid #000;
    border-left: 1px solid #c9c9c9;
}

h4{
    margin-top: 0px;
    margin-bottom: 0px;
    font-size: .7rem;
    font-weight: normal;
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
                <img src="{{$logoBase64}}" alt="US Department of Homeland Security" width="65px">
            </div>
            <div class="w-1-2 text-center mb-1" style="float:center; margin-left:25%;">
                <h2 class="font-bold">Petition for Alien Relative</h2>
                <p class="font-bold" style="margin-top:5px; font-size:0.85rem; margin-bottom:0px;">Department of Homeland Security</p>
                <p style="font-size:0.8rem; margin-top:0px;">U.S. Citizenship and Immigration Services</p>
            </div>
            <div class="text-center mt-1" style="float:right; margin-left:80%;">
                <h3 class="font-bold">USCIS</h3>
                <h3 class="font-bold">Form I-130</h3>
                <h4>OMB No. 1615-0012</h4>
                <h4>Expires 07/31/2024</h4>
            </div>
        </div>
        <div class="separator" style="margin-top:4.25rem;">
            
        </div>

        <div class="mt-2">
            <div class="">
                <div class="" style="float:left; width:70%;">
                    <div class="border" style="float:left; width:45%;">
                        <div class="text text-center font-bold bg-color-gray py-1">
                            For USCIS Use Only
                        </div>
                        <div class="text-center text font-bold border-top"  style="">
                            A-Number
                        </div>
                        <div class="w-full py-1 px-2">
                            <div class="text font-bold mt-1"  style="text-align:center; float:left; width:7%">
                                A
                            </div>
                            <div class="text font-bold mt-1"  style="float:center; width:4%; margin-left:8%;">
                                -
                            </div>
                            <div class=" cell-thin cell-thin-b"  style="float:center; margin-left:13%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:22%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:31%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:40%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:49%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:58%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:67%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:76%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:85%; width:9%;">
                                &nbsp;
                            </div>
                        </div>
                        <div class="text font-bold border-top px-1"  style="">
                            Initial Receipt
                        </div>
                        <div class="text font-bold border-top px-1"  style="">
                            Resubmited
                        </div>
                    </div>
                    <div class="w-full text border-top border-bottom border-r" style="margin-left:45%; width:55%;">
                        <div class="mt-1 text-center" style="margin-bottom:4.8rem;">
                            <strong>Fee Stamp</strong>
                        </div>
                    </div>
                    <div class="font-bold border-left border-right" style="float:left; width:16%;">
                        <div class="text border-l border-r pb-1 px-1">
                            Relocated
                        </div>
                        <div class="text-small border-l border-r border-bottom py-1 px-1">
                            Received
                        </div>
                        <div class="text-small border-l border-r border-bottom py-1 px-1">
                            Sent
                        </div>
                        <div class="text border-l border-r border-bottom py-1 px-1">
                            Completed
                        </div>
                    </div>
                    <div class="border-right border-bottom border-r" style="width:84%; margin-left:16%;">
                        <div class="text font-bold text-center">
                            Section of Law/Visa Category
                        </div>
                        <div class="text-small mt-1">
                            <div class="" style="float:left; width:4%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:4%;">
                                201(b) Spouse - IR-1/CR-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:33%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:37%;">
                                203(a)(1) Unm. S/D - F1-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:66%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="width:29%; margin-left:70%;">
                                203(a)(2)(B) Unm. S/D - F2-4
                            </div>
                        </div>
                        <div class="text-small mt-1">
                            <div class="" style="float:left; width:4%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:4%;">
                                201(b) Spouse - IR-1/CR-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:33%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:37%;">
                                203(a)(1) Unm. S/D - F1-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:66%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="width:30%; margin-left:70%;">
                                203(a)(2)(B) Unm. S/D - F2-4
                            </div>
                        </div>
                        <div class="text-small mt-1" style="margin-bottom:0.45rem;">
                            <div class="" style="float:left; width:4%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:4%;">
                                201(b) Spouse - IR-1/CR-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:33%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:37%;">
                                203(a)(1) Unm. S/D - F1-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:66%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="width:30%; margin-left:70%;">
                                203(a)(2)(B) Unm. S/D - F2-4
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top border-r border-bottom" style="float:center; width:30%; margin-left:70%;">
                    <div class="text-center text font-bold" style="margin-bottom:9.88rem;">
                        Action Stamp
                    </div>
                </div>
            </div>
            <div style="margin-top:10.9rem;" class="w-full">
                <div class="" style="float:left; width:50%;">
                    <div class="text-small font-bold py-2 border-l border-r border-bottom px-1" style="float:left; width:19.55%;">
                        Approved
                    </div>
                    <div class="text-small pt-1 border-r border-bottom px-1" style="padding-bottom:1rem; width:80.45%; margin-left:22.15%;">
                        Petition was filed on (Priority Date mm/dd/yyyy):
                    </div>
                    <div class="text-small font-bold py-2 border-l border-r border-bottom px-1" style="float:left; width:19.55%;">
                        Returned
                    </div>
                    <div class="text-small pt-1 border-r border-bottom px-1" style="padding-bottom:1rem; width:80.45%; margin-left:22.15%;">
                        PDR request granted/denied - New priority date  (mm/dd/yyyy):
                    </div>
                </div>
                <div class="border-r border-bottom" style="float:center; width:47.5%; margin-left:52.5%; font-size:.55rem;">
                    <div class="mt-1">
                        <div class="" style="float:left; width:5%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:5%;">
                            Field Investigation
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:33%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:38%;">
                            Personal Interview
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:66%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="width:29%; margin-left:71%;">
                            204(a)(2)(A) Resolved
                        </div>
                    </div>
                    <div class="">
                        <div class="" style="float:left; width:5%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:5%;">
                            Previously Forwarded
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:33%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:38%;">
                            Pet. A-File Reviewed
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:66%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="width:29%; margin-left:71%;">
                            I-485 Filed Simultaneously
                        </div>
                    </div>
                    <div class="">
                        <div class="" style="float:left; width:5%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:5%;">
                            203(g) Resolved
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:33%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:38%;">
                            Ben. A-File Reviewed
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:66%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="margin-bottom:0.56rem; width:29%; margin-left:71%;">
                            204(g) Resolved
                        </div>
                    </div>
                </div>    
            </div>
            <div class="border-bottom w-full border-r" style="margin-top:3.5rem;">
                <div class="border-r border-l px-1 text py-2 font-bold" style="width:9.76%;">
                    Remarks
                </div>
            </div>
            <div class="border-bottom border-r border-l text" style="width:99.85%">
                <div class="pl-1 py-2">
                    At which USCIS office (e.g., NBC, VSC, LOS, CRO) was Form I-130 adjudicated? _____________________________
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="border text text-center bg-color-gray py-1">
                <strong>To be completed by an attorney or accredited representative</strong> (if any).
            </div>
            <div class="">
                <div class="border-l border-bottom border-r" style="float:left; width:18%;">
                    <div class="p-1" style="float:left; width:15%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="py-2 text font-bold" style="margin-left:20%; width:80%; margin-bottom:0.73rem;">
                        Select this box if <br> Form G-28 is <br> attached.
                    </div>
                </div>
                <div class="border-r border-bottom" style="float:center; width:22%; margin-left:18%;">
                    <div class="py-2 px-1 text " style="width:90%;">
                        <strong>Volag Number</strong> <br> (if any) <br> 
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="border-r border-bottom" style="float:center; width:27%; margin-left:40%;">
                    <div class="py-2 px-1 text" style="width:90%;">
                        <strong>Attorney State Bar Number</strong> <br> (if applicable) <br> 
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="border-bottom border-r" style="float:right; width:33%; margin-left:67%;">
                    <div class="py-2 px-1 text" style="width:90%;">
                        <strong>Attorney or Accredited Representative</strong> <br>
                        <strong>USCIS Online Account Number</strong> (if any) <br> 
                        <input type="text" class="inputs">
                    </div>
                </div>
            </div>
        </div>

        <div class="text font-bold" style="margin-top:4.85rem;">
            <div style="float:left; width:3%;">
                <img src="{{$playBase64}}" alt="" width="50%">
            </div>
            <div style="float:center; margin-left:3%;">
                START HERE - Type or print in black ink.
            </div>
        </div>

        <div class="text border text-center py-1" style="margin-top:1.25rem;">
            If you need extra space to complete any section of this petition, use the space provided in <strong>Part 9. Additional Information. <br>
            Complete and submit as many copies of Part 9., as necessary, with your petition.</strong>
        </div>

        <div class="w-full mt-3">
            <div style="width:49%; float:left;">
                <div class="px-1 bg-color-gray border">
                    <strong>Part 1. Relationship</strong> (You are the Petitioner. Your <br> 
                    relative is the Beneficiary)
                </div>
                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        1.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            I am filling this petition for my (select <strong>only one</strong> box):
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:2%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:25%; margin-left:5%;">
                                Spouse
                            </div>
                            <div style="float:center; with:5%; margin-left:25%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:20%; margin-left:30%;">
                                Parent
                            </div>
                            <div style="float:center; with:5%; margin-left:50%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:20%; margin-left:55%;">
                                Brother/Sister
                            </div>
                            <div style="float:center; with:5%; margin-left:80%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:20%; margin-left:85%;">
                                Child
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1" style="margin-top:1.5rem;">
                    <div class="text font-bold" style="width:10%; float:left;">
                        2.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            If you are filing this petition for your child or parent, <br>
                            select the box that describes your relationship (select <strong>only<br>one</strong> box):
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:5%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:94%; margin-left:6%;">
                                Child was born to parents who were married to each <br>
                                other at the time of the child's birth
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:5%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:94%; margin-left:6%;">
                                Stepchild/Stepparent
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:5%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:94%; margin-left:6%;">
                                Child was born to parents who were not married to <br>
                                each other at the time of the child's birth
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:5%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:94%; margin-left:6%;">
                                Child was adopted (not an Orphan or Hague <br>
                                Convention adoptee)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1" style="margin-top:1.5rem;">
                    <div class="text font-bold" style="width:10%; float:left;">
                        3.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            If the beneficiary is your brother/sister, are you related by <br>
                            adoption?
                        </div>
                        <div class="">
                            <div style="float:center; with:5%; margin-left:60%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:7%; margin-left:67%;">
                                Yes
                            </div>
                            <div style="float:center; with:5%; margin-left:74%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:7%; margin-left:81%;">
                                No
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1" style="margin-top:1.5rem;">
                    <div class="text font-bold" style="width:10%; float:left;">
                        4.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            If the beneficiary is your brother/sister, are you related by <br>
                            adoption?
                        </div>
                        <div class="">
                            <div style="float:center; with:5%; margin-left:60%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:7%; margin-left:67%;">
                                Yes
                            </div>
                            <div style="float:center; with:5%; margin-left:74%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:7%; margin-left:81%;">
                                No
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="float:right; width:49%; margin-left:51%;">
                <div class="px-1 py-1 bg-color-gray border">
                    <strong>Part 2. Information About You</strong> (Petitioner)
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        1.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Alien Registration Number (A-Number) (if any)
                        </div>
                        <div class="mt-1">
                            <div class="mt-1" style="float:center; with:5%; margin-left:30%;">
                                <img src="{{$playBase64}}" alt="" width="5%" >
                            </div>
                            <div class="font-bold" style="float:center; with:5%; margin-left:35%;">
                                A
                            </div>
                            <div class="font-bold" style="float:center; with:5%; margin-left:40%;">
                                -
                            </div>
                            <div class="cell-thin cell-thin-b"  style="float:center; margin-left:45%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:50%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:55%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:60%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:65%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:70%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:75%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:80%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:85%; width:5%;">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        2.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            USCIS Online Account Number (if any)
                        </div>
                        <div class="mt-1">
                            <div class="mt-1" style="float:center; with:5%; margin-left:25%;">
                                <img src="{{$playBase64}}" alt="" width="5%">
                            </div>
                            <div class="cell-thin cell-thin-b"  style="float:center; margin-left:30%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:35%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:40%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:45%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:50%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:55%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:60%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:65%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:70%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:75%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:80%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:85%; width:5%;">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        3.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            U.S. Social Security Number (if any)
                        </div>
                        <div class="mt-1">
                            <div class="mt-1" style="float:center; with:5%; margin-left:40%;">
                                <img src="{{$playBase64}}" alt="" width="5%">
                            </div>
                            <div class="cell-thin cell-thin-b"  style="float:center; margin-left:45%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:50%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:55%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:60%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:65%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:70%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:75%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:80%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:85%; width:5%;">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2 py-1 px-1 font-bold bg-color-gray italic">
                    Your Full Name
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        4.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br>
                        (Last Name)
                    </div>
                    <div class="mt-1" style="width:60%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        4.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br>
                        (First Name)
                    </div>
                    <div class="mt-1" style="width:60%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        4.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="mt-1" style="width:60%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

            </div>
        </div>
    

        <div class="w-full">&nbsp;</div>

        <footer>
            <div class="text" style="float:left; text-align:left; margin-left:-48%;">
                Form I-131 Edition 01/20/21
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 1 of 12
            </div>
        </footer>

        <div class="page-break"></div>
        <!--Página 2 -->
        <div class="separator">

        </div>

        <div class="w-full mt-4">
            <div style="float:left; width:47%;">
                <div class="w-full sec-title-nob border">
                    <strong>Part 2. Information About You</strong> (Petitioner) (continued)
                </div>
                <div class="w-full sec-title-nob mt-4 italic">
                    <strong>Other Names Used</strong> (if any)
                </div>
                <div class="w-full text mt-2">
                    Provide all other names you have ever used, including aliases, <br>
                    maiden name, and nicknames.
                </div>

                <div class="w-full text mt-2">
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            5.a.
                        </div>
                        <div class="text" style="float:center; width:30%; margin-left:10%;">
                            Family Name <br>
                            (Last Name)
                        </div>
                        <div class="mt-1" style="width:65%; margin-left:35%;">
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            5.b.
                        </div>
                        <div class="text" style="float:center; width:30%; margin-left:10%;">
                            Given Name <br>
                            (First Name)
                        </div>
                        <div class="mt-1" style="width:65%; margin-left:35%;">
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            5.c.
                        </div>
                        <div class="text" style="float:center; width:30%; margin-left:10%;">
                            Middle Name
                        </div>
                        <div class="mt-1" style="width:65%; margin-left:35%;">
                            <input type="text" class="inputs">
                        </div>
                    </div>
                </div>

                <div class="w-full font-bold sec-title-nob mt-4 italic">
                    Other Information
                </div>

                <div class="w-full text mt-2">
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            6.
                        </div>
                        <div class="text" style="width:90%; margin-left:10%;">
                            City/Town/Village of Birth <br>
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            7.
                        </div>
                        <div class="text" style="width:90%; margin-left:10%;">
                            Country of Birth <br>
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            8.
                        </div>
                        <div class="text" style="float:center; width:60%; margin-left:10%;">
                            Date of Birth (mm/dd/yyyy)
                        </div>
                        <div class="mt-1" style="width:30%; margin-left:70%;">
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            9.
                        </div>
                        <div class="text" style="float:center; width:20%; margin-left:10%;">
                            Sex
                        </div>
                        <div class="text" style="float:center; width:5%; margin-left:30%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text mt-1" style="float:center; width:10%; margin-left:37%;">
                            Male
                        </div>
                        <div class="text" style="float:center; width:5%; margin-left:47%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="width:20%; margin-left:54%;">
                            Female
                        </div>
                    </div>
                </div>

                <div class="w-full sec-title-nob mt-4 italic" style="height:1.25rem;">
                    <div class="font-bold" style="float:left; width:60%;">
                        Mailing Address
                    </div>
                    <div class="link" style="margin-left:60%;">
                        (USPS ZIP Code Lookup)
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.a.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        In Care Of Name <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Street Number <br> and Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.c.
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:24%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:31%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:38%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:45%;">
                        Flr.
                    </div>
                    <div class="text" style="width:45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.d.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        10.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:18%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold mt-1" style="float:center; width:10%; margin-left:40%;">
                        10.f.
                    </div>
                    <div class="text mt-1" style="float:center; width:17%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:33%; margin-left:67%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.g.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.h.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.i.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        11.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Is your current mailing address the same as your physical <br> 
                            address?
                        </div>
                        <div class="">
                            <div style="float:center; with:5%; margin-left:70%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:7%; margin-left:77%;">
                                Yes
                            </div>
                            <div style="float:center; with:5%; margin-left:84%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:7%; margin-left:91%;">
                                No
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2 text2">
                    If you answered "No" to <strong>Item Number 11.</strong>, provide <br> 
                    information on your physical address in <strong>Item Numbers 12.a. - <br>
                    13.b.</strong>
                </div>
            </div>

            <div style="float:center; width:47%; margin-left:51%;">
                <div class="w-full sec-title-nob italic font-bold">
                    Address History
                </div>

                <div class="w-full text mt-2">
                    Provide your physical addresses for the last five years, whether 
                    inside or outside the United States. Provide your current <br>
                    address first if it is different from your mailing address in <strong>Item <br>
                    Numbers 10.a. - 10.i.</strong>
                </div>

                <div class="w-full text mt-2 font-bold">
                    Physical Address 1
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Street Number <br> and Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.b.
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:24%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:31%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:38%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:45%;">
                        Flr.
                    </div>
                    <div class="text" style="width:45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        12.d.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:18%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold mt-1" style="float:center; width:10%; margin-left:40%;">
                        12.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:17%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:33%; margin-left:67%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.f.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.g.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.h.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        13.a.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date From (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        13.b.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date To (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs" value="PRESENT">
                    </div>
                </div>

                <div class="w-full mt-4" style="border-bottom:1px solid #000;">
                    
                </div>

                <div class="w-full text mt-2 font-bold">
                    Physical Address 2
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Street Number <br> and Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.b.
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:24%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:31%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:38%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:45%;">
                        Flr.
                    </div>
                    <div class="text" style="width:45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        14.d.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:18%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold mt-1" style="float:center; width:10%; margin-left:40%;">
                        14.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:17%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:33%; margin-left:67%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.f.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.g.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.h.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        15.a.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date From (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                
                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        15.b.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date To (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="w-full sec-title-nob italic font-bold mt-4">
                    Your Marital Information
                </div>

                <div class="mt-2">
                    <div class="text font-bold mt-1" style="width:10%; float:left;">
                        16.
                    </div>
                    <div class="text mt-1" style="float:center; width:70%; margin-left:10%;">
                        How many times have you been married?
                    </div>
                    <div class="text mt-1" style="float:center; width:5%; margin-left:80%;">
                        <img src="{{$playBase64}}" alt="" width="90%">
                    </div>
                    <div class="text" style="width:15%; margin-left:85%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold mt-1" style="width:10%; float:left;">
                        17.
                    </div>
                    <div class="text mt-1" style="width:90%; margin-left:10%;">
                        <div>
                            Current Marital Status
                        </div>
                        <div>
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:43%; margin-left:7%;">
                                Single, Never Married
                            </div>
                            <div style="float:center; width:7%; margin-left:50%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:18%; margin-left:57%;">
                                Married
                            </div>
                            <div style="float:center; width:7%; margin-left:75%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:18%; margin-left:82%;">
                                Divorced
                            </div>
                        </div>
                        <div>
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:18%; margin-left:7%;">
                                Widowed
                            </div>
                            <div style="float:center; width:7%; margin-left:25%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:18%; margin-left:32%;">
                                Separated
                            </div>
                            <div style="float:center; width:7%; margin-left:50%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:18%; margin-left:57%;">
                                Annulled
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="text" style="float:left;">
                Form I-131 04/24/19 C
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 2 of 12
            </div>
        </footer>

        <div class="page-break"></div>

        <!-- Página 3 -->
        <div class="separator">

        </div>

        <div class="mt-4">
            <div style="float:left; width:48%;">
                <div class="border sec-title-nob">
                    <strong>Part 2. Information About You</strong> (Petitioner) (continued)
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        18.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Date of Curent Marriage (if currently married)
                        </div>
                        <div>
                            <div style="">
                                (mm/dd/yyyy)
                            </div>
                            <div style="float:right; width:30%;">
                                <input type="text" class="inputs">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 sec-title-nob italic">
                    <strong>Place of Your Current Marriage</strong> (if married)
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        19.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        19.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="width:20%; margin-left:40%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        19.c.
                    </div>
                    <div class="text" style="float:center; width:25%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text" style="width:65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        19.d.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-4 sec-title-nob italic">
                    <strong>Names of All Your Spouses</strong> (if any)
                </div>

                <div class="mt-2 text2 w-full">
                    Provide information on your current spouse (if currently married) 
                    first and then list all your prior spouses (if any).
                </div>

                <div class="mt-2 text2 font-bold w-full">
                    Spouse 1
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        20.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br> (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        20.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br> (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        20.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        21.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date Marriage Ended (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2" style="border-bottom:1px solid #000; width:100%;">
                </div>

                <div class="mt-2 text2 font-bold w-full">
                    Spouse 2
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        22.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br> (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        22.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br> (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        22.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        23.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date Marriage Ended (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 sec-title-nob font-bold italic">
                    Information About Your Parents
                </div>

                <div class="mt-2 text2 font-bold w-full">
                    Parent 1's Information
                </div>

                <div class="mt-2 text2 w-full">
                    Full Name of Parent 1
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        24.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br> (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        24.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br> (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        24.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        25.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date of Birth (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        26.
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:10%;">
                        Sex
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:30%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:37%;">
                        Male
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:47%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="width:20%; margin-left:54%;">
                        Female
                    </div>
                </div>
            </div>
            <div style="float:right; margin-left:52%; width:48%;">

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        27.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country of Birth<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        28.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        City/Town/Village of Residence<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        29.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country of Residence<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2" style="border-bottom:1px solid #000;">

                </div>

                <div class="mt-2 text2 font-bold w-full">
                    Parent 1's Information
                </div>

                <div class="mt-2 text2 w-full">
                    Full Name of Parent 1
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        30.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br> (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        30.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br> (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        30.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        31.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date of Birth (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        32.
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:10%;">
                        Sex
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:30%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:37%;">
                        Male
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:47%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="width:20%; margin-left:54%;">
                        Female
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        33.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country of Birth <br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        34.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        City/Town/Village of Residence<br>
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        35.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country of Residence<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 border sec-title-nob italic">
                    <strong>Additional Information About You</strong> (Petitioner)
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        36.
                    </div>
                    <div class="text" style="margin-left:10%; width:90%;">
                        <div>
                            I am a (Select <strong>only one</strong> box):
                        </div>
                        <div>
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:30%; margin-left:7%;">
                                U.S. Citizen
                            </div>
                            <div style="float:center; width:7%; margin-left:37%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:56%; margin-left:44%;">
                                Lawful Permanent Resident
                            </div>                        
                        </div>
                    </div>
                </div>

                <div class="mt-3 text2 font-bold">
                    If you are a U.S. citizen, complete Item Number 37.
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        37.
                    </div>
                    <div class="text" style="margin-left:10%; width:90%;">
                        <div>
                            My citizenship was acquired through (Select only one <br>
                            box):
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:90%; margin-left:10%;">
                                Birth in the United States
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:90%; margin-left:10%;">
                                Naturalization
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:90%; margin-left:10%;">
                                Parents
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        38.
                    </div>
                    <div class="text" style="margin-left:10%; width:90%;">
                        <div>
                            Have you obtained a Certificate of Naturalization or a 
                        </div>
                        <div>
                            Certificate of Citizenship? 
                        </div>
                        <div>
                            <div style="float:left; width:7%; margin-left:72%">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:7%; margin-left:79%;">
                                Yes
                            </div>
                            <div style="float:center; width:7%; margin-left:86%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:7%; margin-left:93%;">
                                No
                            </div>                        
                        </div>
                    </div>
                </div>

                <div class="mt-2 text2">
                    If you answered "Yes" to <strong>Item Number 38.</strong>, complete the 
                    following:
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        39.a.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Certificate Number<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        39.b.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Place of Issuance<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        39.c.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date of Issuance (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

            </div>

        </div>

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