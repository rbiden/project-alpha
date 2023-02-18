<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/alphaProducts.css">
    <link rel="icon" href="../assets/images/ProjectAlpha_brandlogo.png">
    <title>Project Alpha | Alpha Products</title>
</head>
<body>
    <?php include_once "./nav.php"; ?>

    <main>
        <h1 class="main-title">Alpha Products</h1>
        <hr>
        <p class="main-description">Products inspired by you, designed by you. You have unique tastes and interests and that’s what makes you, YOU. We at Project Alpha have created a product culture that celebrates your distinctiveness, seeking to enhance your life with premium products suited for your individual style.</p>
        <div class="wrapper">
            <section class="section-1">
                <img src="../assets/images/pa-item-1.png">
                <article class="content">
                    <div class="header">
                        <h1 class="title">Alpha Kofe</h1>
                        <hr>
                        <p class="brief">8-in-1 coffee. *10 sachet per Ziplock - 21 grams per Sachet</p>
                    </div>
                    <div class="body">
                        <p>Alpha Kofe is a product that can help generate insulin, treat diabetes, improve the body's use of insulin, decrease insulin resistance, boost mood, lower stress hormones, decrease anxiety, improve memory and cognition, and aid in weight loss. It is also suitable for those on a diet.</p>
                        <p><strong>Ingredients:</strong> Insulin plant, Garcinia Combogia, Agaricus mushroom, Tongkat Ali, Gingko Biloba, Green coffee, Non-dairy Creamer, and Stevia.</p>
                    </div>
                    <div class="footer">
                        <button>Add to Cart<i class="fa-solid fa-arrow-right"></i></button>
                        <p class="price">PHP 275.00</p>
                    </div>
                </article>
            </section>
            <section class="section-2">
                <img src="../assets/images/pa-item-2.png">
                <article class="content">
                    <div class="header">
                        <h1 class="title">Remedy Bio</h1>
                        <hr>
                        <p class="brief">Multi strains of Enzymes with 1 trillion Probiotics</p>
                    </div>
                    <div class="body">
                        <p>Remedy Bio is 100% natural, proven safe and effective. It helps boost your immune system. It also helps in allergies, asthma, sinusitis, eczema, diabetes, constipation, GERD, hyperacidity, acid reflux, gastritis, heart burn, sleeping disorder, insomnia, diarrhea, depression, UTI, ulcer, lactose intolerance, fever, flu, cold, cough, pimples, rashes, athletes foot, toothache, bad breath, etc.</p>
                        <p><strong>Ingredients:</strong> apple, green apple, guyabano, dragon fruit, papaya, kiwifruit, pineapple and figs, mango, honey, banana, avocado, kefir, ginger, asparagus, pumpkin, sugar cane, blueberry, Lactobacillus acidophilus, Bifidobacterium longum, Lactobacillus plantarum, Bacillus coagulans, and saccharomyces boulardii.</p>
                    </div>
                    <div class="footer">
                        <button>Add to Cart<i class="fa-solid fa-arrow-right"></i></button>
                        <p class="price">PHP 750    .00</p>
                    </div>
                </article>
            </section>
            <section class="section-3">
                <img src="../assets/images/pa-item-3.png">
                <article class="content">
                    <div class="header">
                        <h1 class="title">Alpha Gluta</h1>
                        <hr>
                        <p class="brief">Beauty</p>
                    </div>
                    <div class="body">
                        <p>AlphaGluta is a product that offers numerous benefits to the body, including increasing skin stem cell vitality and longevity, repairing damaged tissues and organs, protecting stem cells from UV-induced death, and promoting heart health. Each of these ingredients serves a specific purpose in improving overall health and well-being.</p>
                        <p><strong>Ingredients:</strong> apple stem cells, glutathione, collagen, sodium ascorbate, magnesium, L-carnitine, alpha-lipoic acid, and acerola.</p>
                    </div>
                    <div class="footer">
                        <button>Add to Cart<i class="fa-solid fa-arrow-right"></i></button>
                        <p class="price">PHP 2,500.00</p>
                    </div>
                </article>
            </section>
            <section class="section-4">
                <img src="../assets/images/pa-item-4.png">
                <article class="content">
                    <div class="header">
                        <h1 class="title">Alpha Drops</h1>
                        <hr>
                        <p class="brief">Concentrated Alkaline and Mineral</p>
                    </div>
                    <div class="body">
                        <p>Easy to use convenient and ideal size for travel. A single bottle is 60-70 days' supply based on 4 glasses daily. Colorless, odorless, and tasteless drop that can be added to water, coffee, juice and tea to offset acidity without interfering with the taste of your beverage. The simplest way to make your own alkaline water. Just 3 drops can change purified water to alkaline water. Increase the ph levels of your drinking water to a safe level of ph 9.5- in just 3 drops. These minerals help replenish mineral reserves and buffer excess acids.</p>
                        <p><strong>Ingredients:</strong> Alkaline minerals- sodium, calcium, zinc, iron, magnesium and copper.</p>
                    </div>
                    <div class="footer">
                        <button>Add to Cart<i class="fa-solid fa-arrow-right"></i></button>
                        <p class="price">PHP 750.00</p>
                    </div>
                </article>
            </section>
        </div>
    </main>
    
    <?php include_once "./footer.php"; ?>
    
    <script>
        $('.nav-link').removeClass('nav-active');
        $("#nav-alpha-products").addClass('nav-active');
    </script>
    
</body>
</html>