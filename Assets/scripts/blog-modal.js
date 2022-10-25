// Selectors for various blogs
let blogSreebhumi = document.querySelector("#sreebhumi");
let blogBagbazar = document.querySelector("#bagbazar");
let blogSmitra = document.querySelector("#smitra");
let blogSuruchi = document.querySelector("#suruchi");
let blogDisplay = document.querySelector(".modal-overlay");

// Event listeners for various blogs

blogSreebhumi.addEventListener("click", function () {
  blogDisplay.classList.remove("modal-hide");
  blogDisplay.innerHTML = `<div class="modal-box">
    <div class="modal-close">

      <i class='bx bx-x bx-md bx-tada'></i>
    </div>
    <h3>
      Durga Puja 2022: Kolkata’s famous Sreebhumi Pandal aces 'Vatican City'
      theme
    </h3>
    <p>
      Kolkata Durga Puja Pandal: As Navratri celebrations across the country
      are in full swing. In the east, Durga Puja Pandals are one of the
      biggest attractions of the festival. Kolkata’s famous Sreebhumi Durga
      Puja pandal has caught everyone’s attention with their grand decorations
      and their unique theme, ‘Vatican City’
    
      Kolkata: Navratri celebrations across the country are in full swing. In
      the east, Durga Puja Pandals are one of the biggest attractions of the
      festival. Kolkata’s famous Sreebhumi Durga Puja pandal has caught
      everyone’s attention with its grand decorations and unique theme,
      ‘Vatican City’, reported the Hindustan Times.
      Every year, the club aces its said theme and entices visitors with stunning displays at their pandals. Hence, it is unsurprising that this year they had continued to do the same with their Vatican City-themed pandals which also commemorate its 50 years Golden Jubilee this year.
    </p>
  </div>`;
  let modalClose = document.querySelector(".modal-close");
  modalClose.addEventListener("click", function () {
    blogDisplay.classList.add("modal-hide");
  });
});

// For bagbazar

blogBagbazar.addEventListener("click", function () {
  blogDisplay.classList.remove("modal-hide");
  blogDisplay.innerHTML = `<div class="modal-box">
    <div class="modal-close">

      <i class='bx bx-x bx-md bx-tada'></i>
    </div>
    <h3>
        Baghbazar Sarbojanin Durgotsav 
      </h3>
      <br />
      <p>
        If we talk about festivals then we talk about love and togetherness we think about prosper and an overspread joy around. Once again if we talk about festival we think about some of the flashing moments around the world like; Rio, Paris and our very own KOLKATA and in Kolkata its definitely DURGA-PUJA , and when it comes about the Durga-Puja of Kolkata it ultimately comes to BAGHBAZAR SARBOJONIN DURGOTSAB AND EXHIBITION !!!

        The history of human civilization says, people wanted to be together for protection for togetherness and for celebration. Baghbazar Sarbojonin Durgotsab and Exhibition has been with these primal facts for last 88 years with its tradition of synchronizing different ages ideas and people.
        
        In this glorious past it has came through enormous challenges but in the dream of a better world with love and unity; prosperity and happiness it has celebrated Durgotsab the biggest carnival of the country along with other social and cultural activities. Though according to Hindu mythology Devi(Goddess) Durga is the power of defeating the evils and the constructor of peace but the celebration of Durga Puja in this very time is not only a festival or a carnival not even it's a time to strengthen your bond with the people around you and that is being done by this auspicious organization and it will just go on.
        
      </p>
  </div>`;
  let modalClose = document.querySelector(".modal-close");
  modalClose.addEventListener("click", function () {
    blogDisplay.classList.add("modal-hide");
  });
});

// For smitra

blogSmitra.addEventListener("click", function () {
  blogDisplay.classList.remove("modal-hide");
  blogDisplay.innerHTML = `<div class="modal-box">
    <div class="modal-close">

      <i class='bx bx-x bx-md bx-tada'></i>
    </div>
    <h3>
        Santosh Mitra Square
      </h3>
      <br />
      
      <p>One of the most popular Durga Puja pandals, Santosh Mitra Square in central Kolkata's Lebutala Park is a huge crowd-puller. Organised by BJP councillor Sajal Ghosh, the theme for this year is Azadi ka Amrit Mahotsav and the pandal is modelled after the Red Fort. The puja pandal was inaugurated by actor and BJP leader Mithun last week.
      This year Santosh Mitra Square takes pride in being the costliest puja of Kolkata with a budget of around 18 crore. The cost of the idol itself will be 8 crore. Mintu Pal of Kumartuli who had earlier turned famous by crafting the tallest Durga idol of Kolkata has been assigned to make the Durga of Gold. Not only will such idols needs huge security, but are they a complete splurge of money? Couldn’t such money be spent for social work instead?

The big budget puja committees of Kolkata have to answer indeed and even the public needs to ask themselves whether Durga Puja, the largest street festival of Kolkata is losing its relevance due to the extravaganza!</p>

  </div>`;
  let modalClose = document.querySelector(".modal-close");
  modalClose.addEventListener("click", function () {
    blogDisplay.classList.add("modal-hide");
  });
});

// For Suruchi

blogSuruchi.addEventListener("click", function () {
  blogDisplay.classList.remove("modal-hide");
  blogDisplay.innerHTML = `<div class="modal-box">
    <div class="modal-close">

      <i class='bx bx-x bx-md bx-tada'></i>
    </div>
    <h3>
    Suruchi Sangha
  </h3>
  <br />
  <p>
    Durga Puja is celebrated in honour of the Mother Goddess (Durga), and her victory over the evil buffalo demon Mahishasura. The commemoration honours the dynamic female force (Shakti) in the Universe. Durga Puja in India is much beyond the charm and sparkle of pandals and is not just limited to revelries and indulging. The real reason for every devotee to perform Durga Pooja is the enlightenment of soul and the rejoicing of good over evil.
    Every year, the club aces its said theme and entices visitors with stunning displays at their pandals. Hence, it is unsurprising that this year they had continued to do the same. If you wish to experience this festival in its most authentic form West Bengal is the best place to be. When BONGS from diverse parts of the world travel to reunite with their family and friends, flaring up the delighted mood; when you see the entire state dolled up in vibrant colours and sparkling lights you know that it’s Durga Puja time.

    Our West-Bengal holiday packages are sure to offer you an experience of a lifetime. Don’t forget to check out the Bagbazaar pandal in Northern Kolkata, College square pandal in Central Kolkata and the Suruchi Sangha pandal in South Kolkata.
  </p>
  </div>`;
  let modalClose = document.querySelector(".modal-close");
  modalClose.addEventListener("click", function () {
    blogDisplay.classList.add("modal-hide");
  });
});

// Click on body to close the modal
document.addEventListener("click", function (e) {
  if (e.target === blogDisplay) {
    blogDisplay.classList.add("modal-hide");
  }
});
