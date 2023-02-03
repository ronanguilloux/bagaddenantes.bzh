
function carousel_add(carousel) {
	if ("content" in document.createElement("template")) {
		if (null != document.getElementById("carousel-item-row")) {
			var itemTemplate = document.getElementById("carousel-item-row"),
			indicatorTemplate = document.getElementById("carousel-indicator-row"),
			innerCarousel = document.querySelector(".carousel-inner"),
			indicatorsCarousel = document.querySelector(".carousel-indicators");
			for (var i in carousel.imgs) {

				var photo = carousel.imgs[i],
				cloneIndicator = document.importNode(indicatorTemplate.content, true),
				btn = cloneIndicator.querySelector("button"),
				cloneImg = document.importNode(itemTemplate.content, true),
				img = cloneImg.querySelector("img");
				credits = document.querySelector(".carousel-credits");

				btn.dataset.bsSlideTo = i;
				btn.setAttribute("aria-label", photo);
				img.src = carousel.folder + photo;
				img.alt = carousel.credit + ' - ' + photo;
        credits.innerText = carousel.credits;

				if(0 == i) {
					btn.classList.add('active');
					btn.setAttribute("aria-current", true);
					var itemDiv = cloneImg.querySelector("div");
					itemDiv.classList.add('active');
				}

				indicatorsCarousel.appendChild(cloneIndicator);
				innerCarousel.appendChild(cloneImg);
			}
		}
	}
}

function navbar() {
	//window.location.href
	const items = document.querySelectorAll('#navbarSupportedContent ul li a');
	const current = window.location.pathname.split('/')[1];
	var href_rel = null;
	items.forEach(function(item) {
		href_rel = item.href.split('/')[3];
		item.classList.remove('active');
		if(current == href_rel) {
			item.classList.add('active');
			item.setAttribute('aria-current','page')
		}
	});
}

function skip()
{
}

function play(elem)
{
	var albumFolder = '/assets/mp3/' + elem.parentNode.dataset.album + '/',
		audio = document.getElementById('audio');
	document.querySelectorAll('.playlist li').forEach(function(item) {
		item.classList.remove('playing');
	});
	audio.src = albumFolder + elem.textContent + '.mp3';
	audio.play();
	elem.className = 'playing';

	skip = function()
	{
		if (elem.nextElementSibling)
		{
			play(elem.nextElementSibling);
		}
	}
}

function analytics_events()
{
  var events = [
    {
      href: 'mailto:bagaddenantes@gmail.com',
      category: 'engagement',
      action: 'click',
      label: 'Email'
    },
    {
      href: 'https://www.google.com/maps/place/1+Rue+Jules+Brechoir,+44000+Nantes/',
      category: 'engagement',
      action: 'click',
      label: 'Map'
    },
    {
      href: 'https://fr-fr.facebook.com/Bagaddenantes',
      category: 'engagement',
      action: 'click',
      label: 'Facebook'
    },
    {
      href: 'https://www.youtube.com/channel/UC9Lht1tEXDP3ckeZ5pqyoiA',
      category: 'engagement',
      action: 'click',
      label: 'YouTube'
    },
    {
      href: 'https://www.instagram.com/bagadnantes',
      category: 'engagement',
      action: 'click',
      label: 'Instagram'
    },
    {
      href: 'https://twitter.com/bagaddenantes',
      category: 'engagement',
      action: 'click',
      label: 'Twitter'
    },
    {
      href: 'https://sonerion.bzh',
      category: 'engagement',
      action: 'click',
      label: 'Sonerion'
    },
    {
      href: 'https://sonotek.sonerion.bzh/en/interprete/bagad-naoned-nantes',
      category: 'Engagements',
      action: 'click',
      label: 'Sonotek'
    }
  ];
  // Links
  events.forEach((event, i) => {
    document.querySelectorAll("[href='"+event.href+"']").forEach(function(item) {
      var onClickValue = "gtag('event', '"+event.action+"',{'event_category':'"+event.category+"','event_label':'"+event.label+"'});";
      item.setAttribute('onClick',onClickValue);
    });
  });

  // MP3s
  document.querySelectorAll(".playlist li").forEach(function(item) {
    var onClickValue = "gtag('event','audio_play',{'event_category':'Playlist','event_label':'"+item.innerText+"'});";
    item.setAttribute('onClick',onClickValue);
  });
}

document.addEventListener('DOMContentLoaded', function() {
	var carousel = {
		imgs:
		[
			'IMG_7034.webp',
			'IMG_7035.webp',
			'IMG_7041.webp',
			'IMG_7043.webp',
			'IMG_7047.webp',
			'IMG_7051.webp',
			'IMG_7061.webp'
		],
		folder: "/assets/images/albums/2021/11-26-celtomania/",
    credits: "Celtomania 2021 / Kristell Mimoun"
	};

	carousel_add(carousel);
	navbar();
  analytics_events();
});
