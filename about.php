<?php include('header.php'); ?>
<link rel="stylesheet" href="css/team.css">

    <!-- about
    ================================================== -->
    <section id='about' class="s-about" style="padding-top: 15rem;">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1--light">We Are Brainvave</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                Welcome to BrainVave Software Studios, your destination for exceptional website design and development. With a focus solely on crafting captivating and functional websites, we specialize in turning your online vision into reality. Our dedicated team of experts is committed to delivering top-notch web solutions tailored to your specific requirements. Let us transform your ideas into stunning, user-friendly websites that stand out in the digital landscape. 
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count_container"><span class="stats__count">150000</span> +</div>
                <h5>Lines of Code</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count_container"><span class="stats__count">7000</span> +</div>
                <h5>Hours of Development</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count_container"><span class="stats__count">20</span> +</div>
                <h5>Projects Completed</h5> 
            </div>
            <div class="col-block stats__col">
                <div class="stats__count_container"><span class="stats__count">5</span> +</div>
                <h5>Years of Experience</h5>
            </div>

        </div> <!-- end about-stats -->

    </section> <!-- end s-about -->

    <!-- team
    ================================================== -->
    <section id='team' class="s-team">

        <div class="row team-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Meet Our</h3>
                <h1 class="display-1">Team</h1>
                <p class="lead">Meet the dedicated individuals powering our mission forward with expertise, innovation, and unwavering commitment.</p>
            </div>
        </div>

        <div class="team-container">
            <?php
            $team_members = [
                ["name" => "RK Vishwa", "github" => "rkvishwa", "linkedin" => "rkk-vishva", "role" => "UX Designer"],
                ["name" => "Sadeepa N Herath", "github" => "SadeepaNHerath", "linkedin" => "sadeepanherath", "role" => "Product Designer"],
                ["name" => "Kasun Kumara", "github" => "Kasun-Kumara", "linkedin" => "kasun-kumara-30baaa338", "role" => "Web Developer"],
                ["name" => "Praveen R", "github" => "Praveen-R-2518", "linkedin" => "praveen-r-b374612aa", "role" => "Data Analyst"],
                ["name" => "Thesaru Praneeth", "github" => "Thesaru-p", "linkedin" => "thesaru-p", "role" => "Developer"],
                ["name" => "Harsha Silva", "github" => "harshasilva", "linkedin" => "harsha-silva-b59776357", "role" => "Designer"],
                ["name" => "Senuka Deneth", "github" => "Senuka-Deneth", "linkedin" => "senuka-deneth-70937a345", "role" => "Contributor"],
                ["name" => "Praveen Fernando", "github" => "ARSPFdo-2004", "linkedin" => "senuka-deneth-70937a345", "role" => "Contributor"],
                ["name" => "Vinuth Karunathilaka", "github" => "VinuthKarunathilaka", "linkedin" => "vinuth-karunathilaka-67160334a", "role" => "Contributor"],
                ["name" => "Bhaslu Egodawatte", "github" => "BhasiluEgodawatte", "linkedin" => "bhasilu-egodawatte-79bb70367", "role" => "Contributor"],
            ];

            // First Row: 5 members
            $row1 = array_slice($team_members, 0, 5);
            $row2 = array_slice($team_members, 5);

            echo '<div class="team-row">';
            foreach ($row1 as $member) {
                echo '
                <div class="team-member" data-aos="fade-up">
                    <div class="corner corner-tl"></div>
                    <div class="corner corner-br"></div>
                    <img src="https://github.com/' . $member['github'] . '.png" alt="' . $member['name'] . '">
                    <div class="member-info">
                        <h4>' . $member['name'] . '</h4>
                        <p>' . $member['role'] . '</p>
                        <div class="member-social">
                            <a href="https://github.com/' . $member['github'] . '" target="_blank"><i class="bx bxl-github"></i></a>
                            <a href="https://www.linkedin.com/in/' . $member['linkedin'] . '" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>';
            }
            echo '</div>';

            // Second Row: Remaining members
            echo '<div class="team-row">';
            foreach ($row2 as $member) {
                echo '
                <div class="team-member" data-aos="fade-up">
                    <div class="corner corner-tl"></div>
                    <div class="corner corner-br"></div>
                    <img src="https://github.com/' . $member['github'] . '.png" alt="' . $member['name'] . '">
                    <div class="member-info">
                        <h4>' . $member['name'] . '</h4>
                        <p>' . $member['role'] . '</p>
                        <div class="member-social">
                            <a href="https://github.com/' . $member['github'] . '" target="_blank"><i class="bx bxl-github"></i></a>
                            <a href="https://www.linkedin.com/in/' . $member['linkedin'] . '" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>';
            }
            echo '</div>';
            ?>
        </div>

    </section> <!-- end s-team -->

<?php include('footer.php'); ?>
