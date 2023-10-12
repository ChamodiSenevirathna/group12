<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            Home
        </title>
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>

    <body>
        <header>
            <div class="header-banner">
                <h1>Visit Sri Lanka</h1>
            </div>
            <div class="clear"></div>
            <nav>
                <div class="site-title">Sri Lanka</div>
                <ul>
                    <li style="color: white;">Hello, <?php echo $_SESSION['username']; ?></li>
                    <li><a href='#'>Home</a></li>
                    <li><a href='contact.php'>Contact</a></li>
                    <li><a href="logout.php"> Logout </a></li>
                    <ul>
            </nav>
        </header>
        <section class="content">
            <article>
                <p>
                    Sri Lanka, known as the "Pearl of the Indian Ocean," is a breathtaking island nation situated in South Asia. Nestled just off the southern coast of India, it boasts a rich cultural heritage, stunning natural beauty, and a diverse history that spans thousands of years. Here's a description of this enchanting country:
                </p>

                <p><img src="assets/beach-srilanka.jpg"></p>

                <p>
                    Geography: Sri Lanka is a tropical paradise, characterized by its diverse landscapes. From pristine beaches along the coastline to lush rainforests in the central highlands, the country's geography is incredibly varied. Its central region is home to rolling hills and mountains, including Pidurutalagala, the tallest peak in the country.
                </p>
                <p>
                    Culture: Sri Lanka's culture is a vibrant blend of various influences, including Sinhalese, Tamil, Moor, Malay, and colonial legacies. The majority of the population practices Buddhism, which has left an indelible mark on the country's architecture, festivals, and way of life. Hinduism, Christianity, and Islam are also practiced by significant minorities, contributing to the cultural diversity.
                </p>
                <p>
                    History: Sri Lanka has a rich historical tapestry, with a history that dates back over 2,500 years. The ancient city of Anuradhapura and the rock fortress of Sigiriya are UNESCO World Heritage Sites that showcase the country's historical significance. It was ruled by several dynasties, including the Sinhalese, Tamil, and colonial powers like the Portuguese, Dutch, and British.
                </p>
                <p>
                    Wildlife: The island is renowned for its remarkable biodiversity. National parks and wildlife sanctuaries, such as Yala, Wilpattu, and Sinharaja, provide a habitat for a wide range of species, including leopards, elephants, and numerous bird species. The surrounding oceans are home to diverse marine life, making it a popular destination for whale watching and diving.
                </p>
                <p>
                    Cuisine: Sri Lankan cuisine is a delightful fusion of flavors. It is famous for its use of aromatic spices and herbs, which create a unique taste profile. Dishes like rice and curry, hoppers (a type of pancake), and kottu roti are popular staples. Coconut milk and fresh seafood are prevalent ingredients in many Sri Lankan dishes.
                </p>
                <p>
                    Tourism: Sri Lanka has gained recognition as a top travel destination due to its pristine beaches, lush landscapes, and rich cultural experiences. Tourists flock to cities like Colombo, the capital, Kandy, and Galle, a coastal gem with Dutch colonial architecture. The country offers a wide range of activities, from exploring ancient ruins to embarking on safaris.
                </p>
                <p>
                    Warm Hospitality: Sri Lankans are known for their warmth and hospitality. Visitors often find themselves welcomed with open arms, whether staying in a luxury beachfront resort or a humble homestay in a remote village.
                </p>
                <p>
                    Sri Lanka, with its natural beauty, cultural heritage, and friendly people, invites travelers to explore its wonders and create unforgettable memories. Whether you seek adventure, relaxation, or a taste of history and culture, Sri Lanka offers a kaleidoscope of experiences that will leave you enchanted and inspired.
                </p>
            </article>
        </section>

    </body>

    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() >= 300) {
                $('nav').addClass('fixed-header');
                $('nav div').addClass('visible-title');
            } else {
                $('nav').removeClass('fixed-header');
                $('nav div').removeClass('visible-title');
            }
        });
    </script>

    </html>

<?php
} else {
    header("Location: index.php");
    exit();
}
?>