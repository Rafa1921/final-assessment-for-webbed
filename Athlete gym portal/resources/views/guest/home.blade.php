<!DOCTYPE html>
<html>

<head>
    <title>Home - Gym</title>
    <style>
        body {
            background-color: #0056b3;
        }

        .info-box {
            background: #f8f9fa;
            padding: 20px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        :root {
            --primary-color: #111317;
            --primary-color-light: #1f2125;
            --primary-color-extra-light: #35373b;
            --secondary-color: #f9ac54;
            --secondary-color-dark: #d79447;
            --text-light: #d1d5db;
            --white: #ffffff;
            --max-width: 1200px;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .section__container {
            max-width: var(--max-width);
            margin: auto;
            padding: 5rem 1rem;
        }

        .section__header {
            margin-bottom: 1rem;
            font-size: 2.25rem;
            font-weight: 600;
            text-align: center;
            color: var(--white);
        }

        .section__subheader {
            max-width: 600px;
            margin: auto;
            text-align: center;
            color: var(--text-light);
        }

        .btn {
            padding: 1rem 2rem;
            outline: none;
            border: none;
            font-size: 1rem;
            color: var(--white);
            background-color: var(--secondary-color);
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: var(--secondary-color-dark);
        }

        img {
            width: 100%;
            display: flex;
        }

        a {
            text-decoration: none;
        }

        .bg__blur {
            position: absolute;
            box-shadow: 0 0 1000px 50px var(--secondary-color);
            z-index: -1;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: var(--primary-color);
        }

        nav {
            max-width: var(--max-width);
            margin: auto;
            padding: 2rem 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .nav__logo {
            max-width: 150px;
        }

        .nav__links {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .link a {
            position: relative;
            padding-bottom: 0.75rem;
            color: var(--white);
        }

        .link a::after {
            content: "";
            position: absolute;
            height: 2px;
            width: 0;
            left: 0;
            bottom: 0;
            background-color: var(--secondary-color);
            transition: 0.3s;
        }

        .link a:hover::after {
            width: 50%;
        }

        .header__container {
            position: relative;
            padding-top: 2rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
            gap: 2rem;
        }

        .header__container::before {
            content: "FITNESS";
            position: absolute;
            bottom: 5rem;
            right: 20rem;
            font-size: 10rem;
            font-weight: 700;
            line-height: 7rem;
            color: var(--white);
            opacity: 0.05;
            z-index: -1;
        }

        .header__blur {
            bottom: 5rem;
            right: 0;
        }

        .header__content h4 {
            margin-bottom: 1rem;
            font-size: 1rem;
            font-weight: 600;
            color: var(--secondary-color);
        }

        .header__content h1 {
            margin-bottom: 1rem;
            font-size: 5rem;
            font-weight: 700;
            line-height: 6rem;
            color: var(--white);
        }

        .header__content h1 span {
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke: 1px var(--white);
        }

        .header__content p {
            margin-bottom: 2rem;
            color: var(--text-light);
        }

        .header__image {
            position: relative;
        }

        .header__image::before {
            content: "o";
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            font-size: 40rem;
            font-weight: 400;
            line-height: 20rem;
            color: var(--secondary-color);
            opacity: 0.1;
            z-index: -1;
        }

        .header__image img {
            max-width: 350px;
            margin: auto;
        }

        .explore__header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .explore__nav {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .explore__nav span {
            padding: 0 6px;
            font-size: 1.5rem;
            color: var(--white);
            border: 2px solid var(--white);
            border-radius: 100%;
            cursor: pointer;
            transition: 0.3s;
        }

        .explore__nav span:hover {
            color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .explore__grid {
            margin-top: 4rem;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .explore__card {
            padding: 1rem;
            background-color: var(--primary-color-light);
            border: 2px solid transparent;
            border-radius: 10px;
            transition: 0.3s;
        }

        .explore__card:hover {
            background-color: var(--primary-color-extra-light);
            border-color: var(--secondary-color);
        }

        .explore__card span {
            display: inline-block;
            padding: 2px 9px;
            margin-bottom: 1rem;
            font-size: 1.75rem;
            color: var(--white);
            background-color: var(--secondary-color-dark);
            border-radius: 5px;
        }

        .explore__card h4 {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--white);
        }

        .explore__card p {
            margin-bottom: 1rem;
            color: var(--text-light);
        }

        .explore__card a {
            color: var(--white);
            transition: 0.3s;
        }

        .explore__card a:hover {
            color: var(--secondary-color);
        }

        .class__container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .class__image {
            position: relative;
        }

        .class__image .class__img-1 {
            position: absolute;
            right: 0;
            top: 0;
            max-width: 500px;
            border-radius: 10px;
        }

        .class__image .class__img-2 {
            position: absolute;
            left: 0;
            bottom: 0;
            max-width: 300px;
            border-radius: 10px;
        }

        .class__content {
            padding: 2rem 0;
        }

        .class__content .section__header {
            text-align: left;
            max-width: 400px;
        }

        .class__content p {
            margin-bottom: 4rem;
            color: var(--text-light);
        }

        .join__image {
            margin-top: 4rem;
            position: relative;
        }

        .join__image img {
            border-radius: 10px;
        }

        .join__grid {
            position: absolute;
            bottom: -5rem;
            width: calc(100% - 4rem);
            padding: 2rem;
            margin: 0 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            background-color: var(--primary-color-light);
            border-radius: 10px;
        }

        .join__card {
            flex: 1 1 250px;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .join__card span {
            padding: 5px 12px;
            font-size: 1.75rem;
            color: var(--white);
            background-color: var(--secondary-color-dark);
            border-radius: 5px;
        }

        .join__card h4 {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--white);
        }

        .join__card p {
            color: var(--text-light);
        }

        .price__grid {
            margin-top: 4rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .price__card {
            padding: 3rem 2rem;
            display: flex;
            flex-direction: column;
            background-color: var(--primary-color-light);
            border: 2px solid transparent;
            border-radius: 10px;
            transition: 0.3s;
        }

        .price__card:hover {
            background-color: var(--primary-color-extra-light);
            border-color: var(--secondary-color);
        }

        .price__card__content {
            flex: 1;
            margin-bottom: 2rem;
        }

        .price__card h4 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--white);
        }

        .price__card h3 {
            padding-bottom: 1rem;
            margin-bottom: 2rem;
            font-size: 2rem;
            font-weight: 600;
            color: var(--white);
            border-bottom: 2px solid var(--white);
        }

        .price__card p {
            margin-bottom: 0.75rem;
            color: var(--white);
        }

        .price__card p i {
            margin-right: 0.5rem;
            font-size: 1.2rem;
            color: var(--secondary-color);
        }

        .price__btn {
            color: var(--secondary-color);
            background-color: transparent;
            border: 2px solid var(--secondary-color);
        }

        .price__btn:hover {
            color: var(--white);
            background-color: var(--secondary-color);
        }

        .review {
            background-color: var(--primary-color-light);
        }

        .review__container {
            display: flex;
            gap: 2rem;
        }

        .review__container>span {
            font-size: 6rem;
            color: var(--secondary-color);
            opacity: 0.5;
        }

        .review__content {
            flex: 1;
        }

        .review__content h4 {
            margin-bottom: 1rem;
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--white);
        }

        .review__content p {
            max-width: 800px;
            margin-bottom: 2rem;
            color: var(--text-light);
        }

        .review__rating span {
            font-size: 1.5rem;
            color: var(--secondary-color);
        }

        .review__footer {
            margin-top: 4rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .review__member {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .review__member img {
            max-width: 60px;
            border-radius: 100%;
        }

        .review__member__details h4 {
            margin-bottom: 0;
        }

        .review__nav {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .review__nav span {
            font-size: 2rem;
            color: var(--secondary-color);
            cursor: pointer;
        }

        .footer__container {
            position: relative;
            display: grid;
            grid-template-columns: 400px repeat(3, 1fr);
            gap: 2rem;
        }

        .footer__blur {
            bottom: 0;
            right: 0;
        }

        .footer__logo {
            max-width: 150px;
            margin-bottom: 2rem;
        }

        .footer__col p {
            margin-bottom: 2rem;
            color: var(--text-light);
        }

        .footer__socials {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .footer__socials a {
            padding: 5px 10px;
            font-size: 1.25rem;
            color: var(--secondary-color);
            border: 1px solid var(--secondary-color);
            border-radius: 100%;
            transition: 0.3s;
        }

        .footer__socials a:hover {
            color: var(--white);
            background-color: var(--secondary-color);
        }

        .footer__col h4 {
            margin-bottom: 2rem;
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--white);
        }

        .footer__col>a {
            display: block;
            margin-bottom: 1rem;
            color: var(--text-light);
            transition: 0.3s;
        }

        .footer__col>a:hover {
            color: var(--secondary-color);
        }

        .footer__bar {
            max-width: var(--max-width);
            margin: auto;
            padding: 1rem;
            font-size: 0.8rem;
            color: var(--white);
        }

        @media (width < 900px) {
            .nav__links {
                display: none;
            }

            .header__container {
                grid-template-columns: repeat(1, 1fr);
            }

            .header__image {
                grid-area: 1/1/2/2;
            }

            .explore__grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .class__container {
                grid-template-columns: repeat(1, 1fr);
            }

            .class__image {
                min-height: 500px;
            }

            .price__grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .review__container {
                gap: 2rem;
            }

            .footer__container {
                grid-template-columns: 1fr 200px;
            }
        }

        @media (width < 600px) {
            .explore__header {
                flex-direction: column;
            }

            .explore__grid {
                grid-template-columns: repeat(1, 1fr);
            }

            .join__container {
                margin-bottom: 15rem;
            }

            .join__grid {
                width: 100%;
                margin: 0;
                bottom: -20rem;
            }

            .price__grid {
                grid-template-columns: repeat(1, 1fr);
            }

            .review__container {
                flex-direction: column;
                gap: 0;
            }

            .review__footer {
                flex-direction: column;
            }

            .footer__container {
                grid-template-columns: 1fr 150px;
            }

            .footer__bar {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <x-app-layout>
        <header class="section__container header__container bg-gray-800 rounded-lg px-30 py-12">
            <div class="header__content">
                <span class="bg__blur"></span>
                <span class="bg__blur header__blur"></span>
                <h4>BEST FITNESS IN THE TOWN</h4>
                <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
                <p>
                    At MindGym, we recognize that every individual’s body shape is unique, and we are dedicated to
                    helping you achieve your desired physique with a personalized approach. Understanding your body
                    shape is the first step toward effective fitness planning, and our expert trainers are here to guide
                    you through this process. We start by assessing your current body composition and discussing your
                    fitness goals to create a tailored workout plan that aligns with your specific needs.


                </p>
                <button class="btn">Get Started</button>
            </div>
            <div class="header__image">
                <img src="https://cdn.wallpapersafari.com/86/41/wzMkCg.jpg" alt="header" />
            </div>
        </header>

        <section class="section__container explore__container">
            <div class="explore__header">
                <h2 class="section__header bg-gray-800 rounded-lg px-2 py-2">EXPLORE OUR PROGRAM</h2>
                <div class="explore__nav">
                    <span><i class="ri-arrow-left-line"></i></span>
                    <span><i class="ri-arrow-right-line"></i></span>
                </div>
            </div>
            <div class="explore__grid">
                <div class="explore__card">
                    <span><i class="ri-boxing-fill"></i></span>
                    <h4>Strength</h4>
                    <p>
                        Building strength is more than just lifting weights; it's about empowering you to reach your
                        full potential and enhance your overall physical performance. Our strength training programs are
                        meticulously designed to help you develop functional strength, improve muscle tone, and increase
                        endurance. We begin by assessing your current strength levels and understanding your fitness
                        goals to create a personalized training plan that aligns with your needs. Our expert trainers
                        guide you through a variety of exercises, from foundational movements to advanced techniques,
                        ensuring proper form and maximizing effectiveness. We incorporate a blend of free weights,
                        resistance machines, and bodyweight exercises to target all major muscle groups, promoting
                        balanced strength development.
                    </p>
                    <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
                </div>
                <div class="explore__card">
                    <span><i class="ri-heart-pulse-fill"></i></span>
                    <h4>Physical Fitness</h4>
                    <p>
                        At MindGym, we believe that physical fitness is the cornerstone of a healthy and fulfilling
                        life. Our approach to fitness is holistic, combining cardiovascular training, strength building,
                        flexibility, and balance to create a well-rounded fitness regimen tailored to your individual
                        needs. We start by assessing your current fitness level and understanding your personal goals,
                        whether they involve improving endurance, enhancing muscle tone, or achieving a balanced state
                        of physical well-being. Our fitness programs are designed to challenge and motivate you,
                        incorporating a variety of exercises such as high-intensity interval training (HIIT), endurance
                        runs, circuit workouts, and yoga. Each session is crafted to push your limits while respecting
                        your body’s capacity, ensuring that you make steady progress without risking injury.


                    </p>
                    <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
                </div>
                <div class="explore__card">
                    <span><i class="ri-run-line"></i></span>
                    <h4>Fat Lose</h4>
                    <p>
                        Achieving fat loss is a central focus of our fitness programs, and we tailor our approach to
                        meet your specific needs and goals. Our fat loss strategies combine targeted workouts with
                        nutritional guidance to help you shed excess weight and build a lean, healthy body. We begin by
                        evaluating your current fitness level and understanding your weight loss objectives, whether
                        you're looking to lose a few pounds or undergo a more significant transformation. Our expert
                        trainers design personalized exercise routines that incorporate high-intensity interval training
                        (HIIT), strength training, and cardio exercises, all proven to boost metabolism and enhance fat
                        burning. Alongside physical training, we provide comprehensive nutritional advice, helping you
                        make informed choices about your diet to support your fat loss journey.


                    </p>
                    <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
                </div>
                <div class="explore__card">
                    <span><i class="ri-shopping-basket-fill"></i></span>
                    <h4>Weight Gain</h4>
                    <p>
                        We understand that achieving weight gain goals involves more than just lifting weights; it
                        requires a comprehensive approach that combines nutrition, training, and recovery. Our weight
                        gain program is designed to help you build muscle mass effectively and safely. We start with
                        personalized training plans tailored to your body type and fitness level, focusing on
                        strength-building exercises that stimulate muscle growth. Our experienced trainers will guide
                        you through progressive resistance training, ensuring you lift the right weights with proper
                        form to maximize results and minimize injury risks. In addition to customized workout plans, we
                        offer nutritional guidance to support your weight gain journey. Our nutrition experts provide
                        advice on high-calorie, nutrient-dense foods and meal planning strategies to ensure you consume
                        the right balance of proteins, carbohydrates, and fats.
                    </p>
                    <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </section>

        <section class="section__container class__container">
            <div class="class__image">
                <span class="bg__blur"></span>
                <img src="https://i.pinimg.com/736x/01/46/5f/01465fb0f7b63a9b599bcf628e0e8fea.jpg" alt="class"
                    class="" />
                <img src="https://th.bing.com/th/id/OIP.EewpEFjqPMi13wPHeSJM6AHaEo?rs=1&pid=ImgDetMain" alt="class"
                    class="" />
            </div>
            <div class="class__content">
                <h2 class="section__header bg-gray-800 rounded-lg px-2 py-2">THE CLASS YOU WILL GET HERE</h2>
                <p class="text-black">
                    At MindGym, we offer a diverse range of classes designed to cater to all fitness levels and
                    interests. Our class schedule includes everything from high-energy HIIT sessions and intense
                    strength training to calming yoga and mindful meditation. For those looking to boost their endurance
                    and flexibility, our functional training and pilates classes provide the perfect balance of
                    challenge and recovery. We also offer specialized group classes such as spin, kickboxing, and dance
                    aerobics, which are perfect for those who thrive in a motivating group environment. Our experienced
                    instructors are not only highly skilled but also passionate about creating a positive and
                    encouraging atmosphere in each class. Whether you're a beginner just starting your fitness journey
                    or an experienced athlete aiming to push your limits, you'll find classes tailored to your needs.


                </p>
                <button class="btn btn-primary">Book A Class</button>
            </div>
        </section>

        <section class="section__container join__container">
            <h2 class="section__header bg-gray-800 rounded-lg px-2 py-2">WHY JOIN US ?</h2>
            <p class="section__subheader text-black">
                Joining MindGym means becoming part of a vibrant and supportive community dedicated to helping you reach
                your fitness goals. Our gym offers more than just state-of-the-art equipment and facilities; we provide
                a holistic approach to wellness that emphasizes both physical and mental well-being. As a member, you’ll
                benefit from our expert trainers who are committed to personalizing your fitness journey with tailored
                workout plans and one-on-one guidance. Our inclusive and welcoming environment ensures that everyone,
                regardless of their fitness level, feels comfortable and motivated. We offer a diverse range of classes
                and programs designed to suit all interests and fitness levels, from high-intensity workouts to relaxing
                yoga sessions. Additionally, our flexible membership plans and convenient location in San Mateo Rizal
                make it easy to integrate fitness into your daily routine.


            </p>
            <div class="join__image">
                <img src="https://wallpapers.com/images/hd/gym-motivation-poster-os5s90il3i3rxu85.jpg" alt="" />
                <div class="join__grid">
                    <div class="join__card">
                        <span><i class="ri-user-star-fill"></i></span>
                        <div class="join__card__content">
                            <h4>Personal Trainer</h4>
                            <p>At MindGym, our personal trainers are dedicated to helping you achieve your fitness goals
                                with personalized attention and expert guidance. Each of our trainers brings a unique
                                set of skills and certifications, ensuring that you receive top-notch support tailored
                                to your individual needs. From developing customized workout plans to providing
                                motivation and accountability, our personal trainers are committed to enhancing your
                                fitness journey. They work closely with you to assess your current fitness level,
                                understand your goals, and create a comprehensive plan that aligns with your objectives.
                                Whether you're aiming to lose weight, build muscle, improve athletic performance, or
                                simply maintain a healthy lifestyle, our trainers are equipped with the knowledge and
                                experience to help you succeed.

                            </p>
                        </div>
                    </div>
                    <div class="join__card">
                        <span><i class="ri-vidicon-fill"></i></span>
                        <div class="join__card__content">
                            <h4>Practice Sessions</h4>
                            <p>At MindGym, our practice sessions are designed to provide an unparalleled opportunity for
                                members to refine their skills, achieve personal goals, and push their limits in a
                                supportive environment. We offer a variety of structured sessions that cater to
                                different fitness levels and interests, ensuring that everyone finds a program suited to
                                their needs. Our practice sessions are led by experienced trainers who bring a wealth of
                                knowledge and expertise to each class, guiding members through effective techniques,
                                providing personalized feedback, and helping them stay motivated. Whether you're working
                                on perfecting your form, increasing your endurance, or exploring new fitness routines,
                                our sessions are tailored to help you make significant progress. We emphasize the
                                importance of consistency and dedication, encouraging members to take advantage of our
                                flexible scheduling options that fit into their busy lives.

                            </p>
                        </div>
                    </div>
                    <div class="join__card">
                        <span><i class="ri-building-line"></i></span>
                        <div class="join__card__content">
                            <h4>Good Management</h4>
                            <p>At MindGym, effective management is at the heart of everything we do, ensuring a seamless
                                and rewarding experience for all our members. Our management team is composed of
                                experienced professionals who are dedicated to fostering a positive and productive
                                environment. With a commitment to excellence, we focus on maintaining the highest
                                standards in facility cleanliness, equipment maintenance, and member service. Our team
                                is trained to be attentive, responsive, and proactive in addressing any issues or
                                concerns that arise. We prioritize transparent communication, keeping our members
                                informed about any updates, changes, or special events happening at the gym. Regular
                                staff training ensures that our team remains knowledgeable about the latest fitness
                                trends, safety protocols, and customer service practices. We also utilize advanced
                                management software to efficiently handle memberships, scheduling, and billing, making
                                the administrative side of your gym experience as smooth as possible.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__container price__container">
            <h2 class="section__header bg-gray-800 rounded-lg px-2 py-2">OUR PRICING PLAN</h2>
            <p class="section__subheader text-black">
                At MindGym, we are dedicated to offering flexible and affordable membership plans that cater to a
                variety of fitness needs and lifestyles. Our Basic Membership, priced at just $29.99 per month, provides
                unlimited access to our state-of-the-art facilities and a range of cardio and strength training
                equipment, along with a free fitness assessment to help you get started on the right track. For those
                seeking more comprehensive access, our Standard Membership, available for $49.99 per month, extends your
                access to our gym from 5 AM to 11 PM and includes a wider array of classes such as Yoga and Pilates,
                plus one complimentary personal training session each month. If you want the ultimate experience, our
                Premium Membership at $69.99 per month offers 24/7 gym access, unlimited participation in all classes,
                including specialty ones like CrossFit and Martial Arts, and two free personal training sessions each
                month.


            </p>
            <div class="price__grid">
                <div class="price__card">
                    <div class="price__card__content">
                        <h4>Basic Plan</h4>
                        <h3>30,000</h3>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            Smart workout plan
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            At home workouts
                        </p>
                    </div>
                    <button class="btn price__btn">Join Now</button>
                </div>
                <div class="price__card">
                    <div class="price__card__content">
                        <h4>Weekly Plan</h4>
                        <h3>N/A</h3>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            PRO Gyms
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            Smart workout plan
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            At home workouts
                        </p>
                    </div>
                    <button class="btn price__btn">Join Now</button>
                </div>
                <div class="price__card">
                    <div class="price__card__content">
                        <h4>Monthly Plan</h4>
                        <h3>2,500</h3>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            ELITE Gyms & Classes
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            PRO Gyms
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            Smart workout plan
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            At home workouts
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            Personal Training
                        </p>
                    </div>
                    <button class="btn price__btn">Join Now</button>
                </div>
            </div>
        </section>

        @if(Auth::check())
        <section class="">

            <div class="container">
                <h2 class="section__header bg-gray-800 rounded-lg px-2 py-2">SHARE YOUR EXPERIENCE</h2>
                @if(session('notification'))
                    <div class="w-max alert alert-success">{{session('notification')}}</div>
                @endif
                <form method="POST" action="/add-review">
                    @csrf
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px" name="comment"></textarea>
                        <label for="floatingTextarea2">Message</label>
                    </div>

                    <div class="mt-6 mb-10 flex justify-end">
                        <input id="isFeatured" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="hidden" name="isFeatured" value="0"/>
                        <button
                            class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                            Submit Comment
                        </button>
                    </div>
                </form>
            </div>
        </section>


        <section class="">

            <div class="container mt-6">

                <h2 class="section__header mt-10 bg-gray-800 rounded-lg px-2 py-2">FEATURED COMMUNITY POSTS</h2>



                @foreach ($reviews as $review)
                <div class="card mb-5 mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 mt-2 mr-4">
                                @if(empty($review->user->profile_photo_url) || is_null($review->user->profile_photo_url) )
                                <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                    class="img img-rounded img-fluid mb-4" />
                                @else
                                <img src="{{ $review->user->profile_photo_url }}" alt="{{ $review->user->profile_photo_url }}"
                                    class="img img-rounded img-fluid mb-4" />
                                @endif

                                    
                                <p class="text-secondary text-center">{{ $review->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <a class="float-left"
                                        href="#"><strong>{{ $review->user->name }}</strong></a>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                </p>
                                <div class="clearfix"></div>
                                <p> {{ $review->comment }}</p>
                                <p>
                                    <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i>
                                        Reply</a>
                                    <a class="float-right btn text-white btn-primary"> <i class="fa fa-heart"></i>
                                        Like</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="mx-5">
                    {{ $reviews->links() }}
                </div>
            </div>
        </section>
        @endif

        <footer class="section__container footer__container">
            <span class="bg__blur"></span>
            <span class="bg__blur footer__blur"></span>
            <div class="footer__col ">
                <div class="footer__logo"><img src="" alt="" /></div>
                <p class="text-black">
                    Take the first step towards a healthier, stronger you with our
                    unbeatable pricing plans. Let's sweat, achieve, and conquer together!
                </p>
                <div class="footer__socials">
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-instagram-line"></i></a>
                    <a href="#"><i class="ri-twitter-fill"></i></a>
                </div>
            </div>

            <div class="footer__col">


            </div>
        </footer>
        <div class="footer__bar text-black">
            Copyright © 2024 Web Design. All rights reserved.
        </div>
    </x-app-layout>
</body>

</html>
