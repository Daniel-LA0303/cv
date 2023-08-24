<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .container {
            display: grid;
            grid-template-columns: 25% 75%; 
            
        }
        .info{
            background-color: #252526;
            padding: 40px;
            text-align: center;
            color: #fff;
        }
        .photo{
            width: 80%;
            margin: 0 auto;
        }
        .profile{
            width: 100%;
            display: block;
            height: 180px;
            border-radius: 100%;
        }
        .bor{
            background-color: #007acc; 
            margin: 0px 0px 40px 0px;
            width: 100%; 
            height: 2px;
        }
        .img-skill{
            width: 15%;
            display: block;
            height: 30px;
            margin: 0 10px 0 0;
            background-color: #fff;
            padding: 3px;
            border-radius: 5px;
        }
        .skill{
            display: flex;
            margin: 0 20px;
        }
        .title1{
            font-size: 20px;
            font-weight: bold;
        }
        .language-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); 
            gap: 10px; 
            margin-top: 10px; 
        }
        .language {
            color: #000;
            width: 70%; 
            margin: 0 auto; 
            border-radius: 10px; 
            background-color: #fff; 
            border: 1px solid #ccc; 
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .lan{
            margin: 0;
        }
        .lan-icon{
            width: 50%;
            display: block;
            height: 50px;
        }
        header{
            background-color: #252526;
            padding: 30px 60px;
            color: #fff;
        }
        .title2{
            font-size: 25px;
            font-weight: bold;
        }
        .text-info{
            text-align: justify;
            font-size: 17px;
        }
        .expierence{
            position: relative;
            padding: 0px 60px;
        }
        .border-horizontal {
            border-bottom: 3px solid #007acc; 
            width: 10%; 
            margin: 0 auto; 
            position: absolute;
            top: 100%;
            right: 70px;
        }
        .text-exp{
            text-align: end;
            margin-right: 30px;
            letter-spacing: 5px;
            color: #007acc;
        }
        .timeline {
            display: grid;
            grid-template-columns: 1fr auto 3fr; 
            gap: 10px; 
            align-items: center; 
            margin: 20px 30px;
        }
        .experience2 {
            text-align: left;
        }
        .expierence-info{
            padding: 10px 60px;
        }
        .line {
            border-right: 2px solid #007acc; 
            height: 100px; 
            position: relative;
        }
        .dot {
            width: 20px;
            height: 20px;
            background-color: #007acc; 
            border-radius: 50%; 
            position: absolute;
            top: 0; 
            left: -9px; 
        }
        .project {
            text-align: left;
            margin-left: 20px;
        }
        .text-name{
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .date{
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px; 
            color: #007acc;
        }
        span{
            font-weight: bold;
            letter-spacing: 1px; 
            color: #007acc;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="info">
            <div class="photo">
                <img 
                    class="profile"
                    src="img/yo.jpg" alt=""
                >
            </div>
            <div class="contact">
                <p class="title1">Contact</p>
                <div>
                    <div class="skill">
                        <img 
                            class="img-skill"
                            src="img/linked.jpg" alt=""
                        >
                        <p>Linkedin</p>
                    </div>
                    <div class="bor"></div>
                </div>
                <div>
                    <div class="skill">
                        <img 
                            class="img-skill"
                            src="img/github.png" alt=""
                        >
                        <p>GitHub</p>
                    </div>
                    <div class="bor"></div>
                </div>
                <div>
                    <div class="skill">
                        <img 
                            class="img-skill"
                            src="img/twitter.png" alt=""
                        >
                        <p>Twitter</p>
                    </div>
                    <div class="bor"></div>
                </div>
            </div>
            <div class="skills">
                <p class="title1">Skills</p>
                <div>
                    <div class="skill">
                        <img 
                            class="img-skill"
                            src="img/back.png" alt=""
                        >
                        <p>Backend developer</p>
                    </div>
                    <div class="bor"></div>
                </div>
                <div>
                    <div class="skill">
                        <img 
                            class="img-skill"
                            src="img/front.png" alt=""
                        >
                        <p>Frontend developer</p>
                    </div>
                    <div class="bor"></div>
                </div>
                <div>
                    <div class="skill">
                        <img 
                            class="img-skill"
                            src="img/movil.png" alt=""
                        >
                        <p>Mobile developer</p>
                    </div>
                    <div class="bor"></div>
                </div>
            </div>
            <div class="languges">
                <p class="title1">Languages</p>
                <div class="language-container">
                    <div class="language">
                        <p class="lan">English A2</p>
                        <img 
                            class="lan-icon"
                            src="img/usa.png" alt=""
                        >
                    </div>
                    <div class="language">
                        <p class="lan">Spanish Native</p>
                        <img 
                            class="lan-icon"
                            src="img/mexico.png" alt=""
                        >
                    </div>
                    <div class="language">
                        <p class="lan">French B1</p>
                        <img 
                            class="lan-icon"
                            src="img/france.png" alt=""
                        >
                    </div>
                    <div class="language">
                        <p class="lan">German Beginner</p>
                        <img 
                            class="lan-icon"
                            src="img/germany.jpg" alt=""
                        >
                    </div>
                </div>
            </div>
        </aside>
        <article 
            style="color: #252526;"
        >
            <header>
                <p class="title2"
                    style="color: #007acc;"
                >Luis Alberto Zacarias Daniel</p>
                <p class="text-info">I am currently in my last semester of my Engineering career in computer science, 
                    I specialize in three areas that are backend, frontend and mobile, being the backend my 
                    spinality where I have more experience, as I have worked different architectures such as monolithic,
                     microservices and currently start with serverless development</p>
            </header>

            <div class="expierence">
                <p class="text-exp title1"
                >Experience</p>
                <div class="border-horizontal"></div>
            </div>
            <div class="expierence-info">
                <div class="timeline">
                    <div class="experience2">
                        <p class="text-name">MicroCourse</p>
                        <p class="date">March 2023 - Present</p>
                    </div>
                    <div class="line">
                        <div class="dot"></div>
                    </div>
                    <div class="project">
                        <p>We are working with several technologies for a microservices 
                            project on courses, the technologies that we have so far are 
                            <span>Spring</span>, databases such as <span>MySQL</span> and <span>MongoDB</span>, <span>Docker</span>
                            and <span>Kubernates</span> for our containers and <span>AWS</span> to have our project in the cloud, 
                            basically the project is simple but it is about knowing how these 
                            technologies could be implemented together in a project, it is that users 
                            can register safely using <span>JWT</span>, and this will be able to create their courses 
                            or enter courses, through payments among other things. This project is purely backend.</p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="experience2">
                        <p class="text-name">MicroHotel</p>
                        <p class="date">September 2022 - December 2022</p>
                    </div>
                    <div class="line">
                        <div class="dot"></div>
                    </div>
                    <div class="project">
                        <p>This project is built with the microservices architecture, 
                            <span>Spring</span> was used as a framework and <span>Eureka</span> as a server, in addition 
                            to using several databases such as <span>MySQL</span>, <span>PostGreSQL</span> and <span>MongoDB</span>.
                            The project is to give the accessibility to meet new hotels to book personally, 
                            we have the functionality to register, comment and search hotels, 
                            there will also be an admin who will have the functionality to delete certain 
                            comments if necessary, the admin is the one who will have the ability to 
                            create the hotels with their description and other information. The project is purely backend.</p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="experience2">
                        <p class="text-name">LessRess</p>
                        <p class="date">February 2022 - May 2022</p>
                    </div>
                    <div class="line">
                        <div class="dot"></div>
                    </div>
                    <div class="project">
                        <p>This is a project that occupies a <span>ServerLess</span> architecture 
                            and for that we occupy a service called Firebase that handles 
                            the <span>Backend</span> for us, from the <span>Frontend</span> we have two applications one 
                            developed in <span>ReactJs</span> and another in <span>ReactNative</span>, the project consists of 
                            a Dashboard so that users when registering can organize the 
                            store of their business, the user has the ability to customize various 
                            parts of their DashBoard as change the color, their information among 
                            other things, can make CRUD functionalities for your products, you can 
                            also make the same functionalities 
                            for categories and all this can be done from a web page or app.</p>
                    </div>
                </div>      
                <div class="timeline">
                    <div class="experience2">
                        <p class="text-name">Blog-Da</p>
                        <p class="date">August 2021 - January 2022</p>
                    </div>
                    <div class="line">
                        <div class="dot"></div>
                    </div>
                    <div class="project">
                        <p>This was a fullstack project developed by me and with 
                            the <span>ReactJs</span> tools in the Frontend and backend with <span>MongoDB</span>, 
                            <span>ExpressJs</span> and <span>NodeJs</span> were used , also other tools such as <span>Tailwind</span>,
                            <span>Material UI</span> among others. It consists of simulating a blog where users 
                            can register and make various functionalities such as, create, edit, search or delete a post, 
                            has more complex functionalities such as, comment, reply, save, and mark which posts you liked, 
                            also has a simple dashboard where you can filter certain things you have already interacted with.</p>
                    </div>
                </div>
            </div>
            <div class="expierence">
                <p class="text-exp title1">Education</p>
                <div class="border-horizontal"></div>
            </div>
            <div class="expierence-info">
                <div class="timeline">
                    <div class="experience2">
                        <p class="text-name">BUAP - Computer Science Engineering</p>
                        <p class="date">2018 - 2023</p>
                    </div>
                    <div class="line">
                        <div class="dot"></div>
                    </div>
                    <div class="project">
                        <p>I study computer science engineering where 
                        I have gained a lot of experience and where I 
                        find my interest in various areas in programming, 
                        areas such as web and mobile programming were the ones that most interested me, 
                        finally it was the backend area where I would end up specializing on my own.</p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="experience2">
                        <p class="text-name">CETis 67 - Technical high school</p>     
                        <p class="date">2014 - 2017</p>
                    </div>
                    <div class="line">
                        <div class="dot"></div>
                    </div>
                    <div class="project">
                        <p>Study a technical career in a technical high school 
                            called CETis No 67,  my career was about programming, 
                            it was in this institute where I would be interested in programming 
                            as I saw topics such as structured programming, POO, mobile application 
                            development and web</p>
                    </div>
                </div>
            </div>

        </article>
    </div>
</body>
</html>