<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences - Mon CV</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/skills.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navigation.php'; ?>
    
    <main class="main-content">
        <section class="skills-section">
            <div class="container">
                <h1>Mes Compétences</h1>
                
                <div class="skills-categories">
                    <div class="category">
                        <h2>Développement Front-end</h2>
                        <div class="skill">
                            <div class="skill-info">
                                <span>HTML5/CSS3</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="75%"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="skill-info">
                                <span>JavaScript</span>
                                <span>30%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="30%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="category">
                        <h2>Développement Back-end</h2>
                        <div class="skill">
                            <div class="skill-info">
                                <span>PHP</span>
                                <span>60%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="68%"></div>
                            </div>
                        </div>
                        
                        <div class="skill">
                            <div class="skill-info">
                                <span>Java</span>
                                <span>50%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="50%"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>MySQL</span>
                                <span>65%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="65%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="category">
                        <h2>Outils & Technologies</h2>
                        <div class="skill">
                            <div class="skill-info">
                                <span>Git</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="60%"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="skill-info">
                                <span>Github</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="60%"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="skill-info">
                                <span>VSCode</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="scripts/main.js"></script>
</body>
</html>