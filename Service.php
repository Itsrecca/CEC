<!DOCTYPE html>
<html>
<head>
    <title>CEBU EASTERN COLLEGE ONLINE MATERIAL</title>
    <link rel="stylesheet" href="Service.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Roboto:wght@100&display=swap');
    </style>
</head>
<body>
    <nav class="Logo">
        <a href="home.html"><img src="CECLOGOWHITE.png"></a>
        <div class="nav-links">
            <li><a href="HomePage.php">HOME</a></li>
            <li><a href="Service.php">SERVICES</a></li>
            <li><a href="Contacts.php">CONTACTS</a></li>
            <a href="CEC.php"><button class="circular-button">LOGOUT</button></a>
        </div>
    </nav>
    <main>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <span class="accordion-item-header-title">STUDENT'S MATERIAL</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down accordion-item-header-icon">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
                <div class="accordion-item-description-wrapper" style="background: white; ">
                    <div class="accordion-item-description" onclick="zoomImage(event)">
                        <hr>                    
                            <img src="img/Sgirl1.jpg" class="zoomed-image">
                            <img src="img/back.jpg" class="zoomed-image2">
                    </div>
                    
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <span class="accordion-item-header-title">TEACHER'S MATERIAL</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down accordion-item-header-icon">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
                <div class="accordion-item-description-wrapper">
                    <div class="accordion-item-description">
                        <hr>
                        <p>This is the description for Accordion Item 2.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <span class="accordion-item-header-staff">STAFF'S MATERIAL</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down accordion-item-header-icon">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
                <div class="accordion-item-description-wrapper">
                    <div class="accordion-item-description">
                        <hr>
                        <p>This is the description for Accordion Item 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
    function zoomImage(event) {
        var target = event.target;
        
        if (target.classList.contains('zoomed-image')) {
            var image = target;
            
            image.classList.toggle('zoomed');
    
            if (image.classList.contains('zoomed')) {
                var container = image.parentElement;
                var offsetX = (window.innerWidth - image.naturalWidth) / 3;
                var offsetY = (window.innerHeight - image.naturalHeight) / 2;
                image.style.left = offsetX + "px";
                image.style.top = offsetY + "px";
            } else {
                
                image.style.left = "";
                image.style.top = "";
            }
        }
    }
      
        document.querySelectorAll(".accordion-item-header").forEach(header => {
            header.addEventListener("click", () => {
                const item = header.parentElement;
                item.classList.toggle("open");
            });
        });
    </script>
</body>
</html>
