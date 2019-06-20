
<link rel="stylesheet" href="../../css/Resume.css">
<link rel="stylesheet" type="text/css" href="../../css/ResumePrint.css" media="print">
<div id="divimprimer" class="resume-wrapper" >
    <section class="profile section-padding">
        <div class="container">
            <div class="name-wrapper">
                <h1><?php echo $_SESSION['nom']; ?><br/>
                    <?php echo $_SESSION['prenom']; ?></h1>
            </div>
            <div class="clearfix"></div>
            <div class="contact-info clearfix">
                <ul class="list-titles">
                    <li>Call</li>
                    <li>Mail</li>

                </ul>
                <ul class="list-content ">
                    <li><?php echo $_SESSION['telephone']; ?></li>
                    <li><?php echo $_SESSION['mail']; ?></li>
                    <li>mon adresse, ma ville</li>
                </ul>
            </div>
            <div class="contact-presentation"> 
                <p><span class="bold">Présentation : </span><?php echo $_SESSION['description']; ?></p>
            </div>
            <div class="contact-social clearfix">
                <ul class="list-titles">
                    <li>Twitter</li>
                    <li>LinkedIn</li>
                </ul>
                <ul class="list-content">
                    <li><a href="<?php echo $_SESSION['twitter']; ?>"><?php echo $_SESSION['twitter']; ?></a> </li>
                    <li><a href="<?php echo $_SESSION['linkedIn']; ?>"><?php echo $_SESSION['linkedIn']; ?></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="experience section-padding">
        <div class="container">
            <h3 class="experience-title">Experience</h3>

            <div class="experience-wrapper" >
                <div class="company-wrapper clearfix" >
                    <div class="experience-title" >Mon entreprise </div>
                    <div class="time" > debut - fin </div >
                </div >
            </div >


            <div class="container">
                <h3 class="experience-title">Formation</h3>

                <div class="experience-wrapper" >
                    <div class="company-wrapper clearfix" >
                        <div class="experience-title" > ecole </div >

                    </div >
                    <div class="job-wrapper clearfix" >
                        <div class="experience-title" >Deveolppeur informatique </div >
                        <div class="company-description" >
                            <p > Je suis un super developpeur</p >
                        </div >
                    </div >
                </div >


                <div class="section-wrapper clearfix">
                    <h3 class="section-title">Compétences</h3>
                    <li class='skill-percentage' style='width: 80%'>html / css</li>
                    <li class='skill-percentage' style='width: 85%'>php</li>
                    <li class='skill-percentage' style='width: 66%'>javaScript</li>
                </div>

            </div>
    </section>
    <div class="clearfix"></div>
</div>
<div><input class="btn" style="text-align: center;width: 100%;" type="button" value="Exporter au format PDF" onclick="window.print()"></div>            

