<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet" />
    <title>Document</title>
  </head>
  <body>
    <header>
			<?php  if ($error) : ?>
        <div class="popUp">
					<div class="popContent">
						<div class="close">+</div>
						<div id="error"><?php echo $error; ?> </div> 
					</div>
				</div>
				<?php  endif ?>	
        
      <div id="form" class="subscForm">
        <h1>Subscribe To Our Newsletter</h1>
				<form method="post" action="/new.php">
          <input type="email" name="email" placeholder="Email" />
          <button type="submit" name="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </header>
    <section>
      <div class="title">
        <h1>Lorem ipsum dolor sit amet</h1>
      </div>
      <div class="container">
        <div class="step_1">
          <svg
            class="number"
            width="35"
            height="76"
            viewBox="0 0 35 76"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M34.6777 75.3594H17.1836V19.668L0 24.6885V11.4385L33.0732 0H34.6777V75.3594Z"
              fill="#3F3F3F"
            />
          </svg>
          <div class="contInfo">
            <h1>Lorem ipsum dolor</h1>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
          </div>
        </div>
        <svg
          class="arrow"
          width="45"
          height="88"
          viewBox="0 0 45 88"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M45 44L-4.07833e-06 87.3013L-2.92811e-07 0.698729L45 44Z"
            fill="#1699D3"
          />
        </svg>
        <div class="step_2">
          <svg
            class="number"
            width="55"
            height="77"
            viewBox="0 0 55 77"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M54.1387 76.4463H1.55273V65.0596L25.7754 39.5947C31.7448 32.7972 34.7295 27.3971 34.7295 23.3945C34.7295 20.151 34.0221 17.6839 32.6074 15.9932C31.1927 14.3024 29.1396 13.457 26.4482 13.457C23.7913 13.457 21.6348 14.5957 19.9785 16.873C18.3223 19.1159 17.4941 21.9281 17.4941 25.3096H0C0 20.6859 1.15592 16.4245 3.46777 12.5254C5.77962 8.5918 8.98861 5.52083 13.0947 3.3125C17.2008 1.10417 21.79 0 26.8623 0C35.0055 0 41.2682 1.88053 45.6504 5.6416C50.0671 9.40267 52.2754 14.8027 52.2754 21.8418C52.2754 24.8092 51.7233 27.7077 50.6191 30.5371C49.515 33.332 47.7897 36.2822 45.4434 39.3877C43.1315 42.4587 39.3877 46.582 34.2119 51.7578L24.4814 62.9893H54.1387V76.4463Z"
              fill="#3F3F3F"
            />
          </svg>
          <div class="contInfo">
            <h1>Lorem ipsum dolor</h1>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
          </div>
        </div>
        <svg
          class="arrow second"
          width="45"
          height="88"
          viewBox="0 0 45 88"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M45 44L-4.07833e-06 87.3013L-2.92811e-07 0.698729L45 44Z"
            fill="#1699D3"
          />
        </svg>
        <div class="step_3">
          <svg
            class="number"
            width="55"
            height="78"
            viewBox="0 0 55 78"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M18.1152 31.4688H26.3447C32.8662 31.4688 36.127 28.277 36.127 21.8936C36.127 19.4092 35.3506 17.3906 33.7979 15.8379C32.2451 14.2507 30.054 13.457 27.2246 13.457C24.9128 13.457 22.8942 14.1299 21.1689 15.4756C19.4782 16.8213 18.6328 18.4948 18.6328 20.4961H1.19043C1.19043 16.528 2.2946 12.9912 4.50293 9.88574C6.71126 6.78027 9.76497 4.36491 13.6641 2.63965C17.5977 0.879883 21.9108 0 26.6035 0C34.9883 0 41.5788 1.91504 46.375 5.74512C51.1712 9.5752 53.5693 14.8372 53.5693 21.5312C53.5693 24.7747 52.5687 27.8457 50.5674 30.7441C48.6006 33.6081 45.7194 35.9372 41.9238 37.7314C45.9264 39.1807 49.0664 41.389 51.3438 44.3564C53.6211 47.2894 54.7598 50.9297 54.7598 55.2773C54.7598 62.0059 52.1719 67.3887 46.9961 71.4258C41.8203 75.4629 35.0228 77.4814 26.6035 77.4814C21.6693 77.4814 17.0801 76.5498 12.8359 74.6865C8.6263 72.7887 5.43457 70.1836 3.26074 66.8711C1.08691 63.5241 0 59.7285 0 55.4844H17.5459C17.5459 57.7962 18.4775 59.7975 20.3408 61.4883C22.2041 63.179 24.4987 64.0244 27.2246 64.0244C30.2956 64.0244 32.7454 63.179 34.5742 61.4883C36.403 59.763 37.3174 57.5719 37.3174 54.915C37.3174 51.1195 36.3685 48.4281 34.4707 46.8408C32.5729 45.2536 29.9505 44.46 26.6035 44.46H18.1152V31.4688Z"
              fill="#3F3F3F"
            />
          </svg>
          <div class="contInfo">
            <h1>Lorem ipsum dolor</h1>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="title_2">
        <h3>Curabitur ut facilisis arcu</h3>
      </div>
      <div class="about">
        <div class="personInfo">
          <div class="photoPpl">
            <img src="photo/avatar-woman.png" alt="woman" />
          </div>
          <div class="contInfo">
            <h1>Lorem ipsum dolor</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              consequat quam sem, id facilisis odio tempus eu.
            </p>
          </div>
        </div>
        <div class="personInfo">
          <div class="photoPpl">
            <img src="photo/avatar-man.png" alt="man" />
          </div>
          <div class="contInfo">
            <h1>Lorem ipsum dolor</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              consequat quam sem, id facilisis odio tempus eu.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <button class="button_2">
        <a href="#form">Lorem ipsum dolor sit amet</a>
      </button>
      <div class="icon">
        <div>
          <img src="photo/icons-globe.png" alt="globe" />
        </div>
        <div>
          <img src="photo/icons-html.png" alt="html" />
        </div>
        <div>
          <img src="photo/icons-js.png" alt="js" />
        </div>
        <div>
          <img src="photo/icons-css.png" alt="css" />
        </div>
        <div>
          <img src="photo/icons-wordpress.png" alt="wordpress" />
        </div>
      </div>
    </section>
    <footer>
      <div class="links">
        <li>
          <a href="">Lorem ipsum</a>
        </li>
        <li>
          <a href="">Lorem ipsum</a>
        </li>
        <li>
          <a href="">Lorem ipsum</a>
        </li>
      </div>
      <div class="webInfo">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
          consequat quam sem, id facilisis odio tempus eu. Curabitur ut
          facilisis arcu, sed vehicula risus. Ut faucibus ut sapien at dictum.
          Ut ut elementum sem. Proin vulputate purus mauris.
        </p>
      </div>
		</footer>
		<script src="app.js"></script>
  </body>
</html>






