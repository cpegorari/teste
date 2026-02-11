<style>
    /* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #0d0d0d;
    color: #fff;
    line-height: 1.5;
}

/* HERO */
.hero {
    position: relative;
    height: 70vh;
    background: #300; /* substitua por imagem depois */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.hero .overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.6);
}

.hero-content {
    position: relative;
    max-width: 700px;
    padding: 20px;
}

.hero h1 {
    font-size: 2.4rem;
    margin-bottom: 10px;
}

.tagline {
    font-size: 1.2rem;
    opacity: 0.8;
}

.hero-buttons {
    margin: 20px 0;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    margin: 5px;
}

.btn.primary {
    background: #c00;
    color: #fff;
}

.btn.secondary {
    border: 2px solid #fff;
    color: #fff;
}

.sub-info {
    font-size: 0.9rem;
    opacity: 0.7;
}

/* RECENTLY JOINED */
.recent {
    padding: 50px 20px;
    text-align: center;
}

.profiles {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 30px;
}

.profile-card {
    background: #1a1a1a;
    padding: 20px;
    width: 220px;
    border-radius: 8px;
    text-align: center;
}

.profile-img {
    width: 100%;
    height: 140px;
    background: #333;
    border-radius: 6px;
    margin-bottom: 15px;
}

.status {
    display: inline-block;
    margin-top: 10px;
    font-size: 0.85rem;
}

.status.online {
    color: #0f0;
}

.status.new {
    color: #f90;
}

.locked {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* HOW IT WORKS */
.how-it-works {
    padding: 50px 20px;
    text-align: center;
}

.steps {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;
}

.step {
    background: #1a1a1a;
    padding: 20px;
    border-radius: 6px;
    width: 250px;
}

/* PRIVACY */
.privacy {
    padding: 50px 20px;
    text-align: center;
}

.privacy-list {
    list-style: none;
    margin-top: 20px;
}

.privacy-list li {
    margin: 8px 0;
}

/* WHY JOIN */
.why-join {
    padding: 50px 20px;
    text-align: center;
}

.benefits {
    list-style: none;
    margin-top: 20px;
}

.benefits li {
    margin: 8px 0;
}

/* CTA */
.cta {
    padding: 60px 20px;
    text-align: center;
    background: #200;
}

.btn.large {
    padding: 15px 40px;
    font-size: 1.2rem;
}

/* FOOTER */
footer {
    padding: 20px;
    text-align: center;
    background: #111;
}

footer a {
    color: #aaa;
    margin: 0 10px;
    text-decoration: none;
}

footer a:hover {
    color: #fff;
}
</style>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrivateConnect</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Private Connections. Real Couples. Across Europe.</h1>
        <p class="tagline">Discreet. Verified. Exclusive.</p>

        <div class="hero-buttons">
            <a href="#" class="btn primary">JOIN NOW</a>
            <a href="#" class="btn secondary">LOG IN</a>
        </div>

        <p class="sub-info">18+ Only • GDPR Compliant • Discreet Platform</p>
    </div>
</header>

<section class="recent">
    <h2>Recently Joined</h2>

    <div class="profiles">
        <div class="profile-card">
            <div class="profile-img"></div>
            <h3>Anna & Rob</h3>
            <p>Berlin, Germany</p>
            <span class="status online">Couple • Online</span>
        </div>

        <div class="profile-card">
            <div class="profile-img"></div>
            <h3>Lena</h3>
            <p>Paris, France</p>
            <span class="status new">Single Woman • New</span>
        </div>

        <div class="profile-card">
            <div class="profile-img"></div>
            <h3>Mike</h3>
            <p>Amsterdam, Netherlands</p>
            <span class="status online">Explorer • Online</span>
        </div>

        <div class="profile-card locked">
            <h3>Unlock full profiles</h3>
            <p>Create your account</p>
            <a href="#" class="btn primary small">JOIN FREE</a>
        </div>
    </div>
</section>

<section class="how-it-works">
    <h2>How It Works</h2>

    <div class="steps">
        <div class="step">
            <h3>1. Create your private profile</h3>
        </div>
        <div class="step">
            <h3>2. Discover verified members</h3>
        </div>
        <div class="step">
            <h3>3. Connect securely</h3>
        </div>
    </div>
</section>

<section class="privacy">
    <h2>Your Privacy Comes First</h2>

    <ul class="privacy-list">
        <li>Anonymous Browsing</li>
        <li>Verified Members</li>
        <li>GDPR Compliant</li>
        <li>Control Your Visibility</li>
    </ul>
</section>

<section class="why-join">
    <h2>Why Join Us?</h2>

    <ul class="benefits">
        <li>Real Members</li>
        <li>Private Galleries</li>
        <li>Exclusive Events</li>
        <li>Advanced Filters</li>
        <li>Priority Visibility (Pro)</li>
    </ul>
</section>

<section class="cta">
    <h2>Ready to Explore Tonight?</h2>
    <a href="#" class="btn primary large">CREATE YOUR PROFILE</a>
    <p class="sub-info">It takes less than 1 minute.</p>
</section>

<footer>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms of Use</a>
    <a href="#">Cookie Policy</a>
    <a href="#">18+ Only</a>
    <a href="#">Contact</a>
</footer>

</body>
</html>
