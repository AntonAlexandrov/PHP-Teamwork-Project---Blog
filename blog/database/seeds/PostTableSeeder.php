<?php
/**
 * Created by PhpStorm.
 * User: Ves
 * Date: 26/4/15
 * Time: 12:15
 */

use Blog\Post;

class PostTableSeeder extends \Illuminate\Database\Seeder {

	public function run() {
		Post::create(
			[
				'title' => 'My first test post',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores cumque eius fuga saepe. Commodi corporis debitis ducimus ea, eos fuga fugit iste itaque laborum nobis odit placeat quo recusandae.',
				'tags' => 'laravel, programming, test, php basics',
				'photo' => 'http://www.destination360.com/north-america/us/nevada/images/s/nevada-lake-mead.jpg'
			]
		);

		Post::create(
			[
				'title' => 'My first year at SoftUni',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores cumque eius fuga saepe. Commodi corporis debitis ducimus ea, eos fuga fugit iste itaque laborum nobis odit placeat quo recusandae.',
				'tags' => 'laravel, softuni, development, programming, test',
				'photo' => 'http://www.nakov.com/wp-content/uploads/2014/01/Software-University-Logo-blue-horizontal.png'
		]);

		Post::create(
			[
				'title' => 'Godafoss',
				'content' => "We have planned on not spending any more time at the Mývatn area, but the almost complete absence of wind and the bright, warming sunshine entice us into having an outdoor lunch break in the village of Reykjahlíð. As, according to the forecast, we won't have the chance of such a beautiful weather till the end of our trip, and, since the rest of our itinerary for this day involves only 3 hours of driving and 2 planned stops ahead, we decide it's about time to cut ourselves some slack and give in to the temptation. After a quick shopping for our usual food provisions (smoked salmon, tomatoes, bread, and skyr, that is) at the supermarket and a not-so-quick (read: half-an-hour) visit on my part to the powder room of its associated rest area, we finally indulge in an impromptu picnic on the nearby wooden benches. We stay for about 30 minutes soaking up the sun, then drive off westwards to the one of the most spectacular waterfalls in Iceland, Goðafoss.

It's the visit to the public swimming pool in the village of Hofsós in North Iceland, that's at the top of our agenda for the day, though. In fact, to be honest, it has been on the top of our agenda for the whole trip, apart from the eruption, of course. So that we hope to get there on time to catch the sunset over the North Atlantic Ocean. However, I have a feeling the pool might not be open until that late, and I call to check the working hours. I am right, it closes at 3pm on Sundays, so our initial plan fails, but instead we can go for a refreshing swim first thing in the morning and take our time today to fully enjoy the sights on our way.

But by the time we get to the falls, the weather changes dramatically. Now the sky above us is leaden with overcast and the wind is back with a vengeance. Down below, at this particular viewpoint I want to photograph from, it blows unending fine water spray into our faces and camera lenses, making it nearly impossible to obtain a decent photo. After spending 30 minutes in efforts to combat the unfavorable shooting conditions, we leave with only a couple of nearly acceptable images.",
				'tags' => 'iceland, travel, photography',
				'photo' => 'http://2.bp.blogspot.com/-C83GP-o_LSU/VMazYKlJu8I/AAAAAAAAIlM/ew42C8i-WtU/s1600/iceland51_.jpg'
		]);

		Post::create(
			[
				'title' => 'Hosfos',
				'content' => "When we reach Hofsós, it's already dark, but the village is so tiny, we find the swimming pool right away although being barely noticeable from the street. Designed by the same architectural office that stays behind the creation of the world famous Blue Lagoon Spa, its minimalistic concrete building is seamlessly integrated into the hillside by the coast in such a way that, even though offering protection from disturbances from the surrounding village, it allows a clear view of what lies beyond from the outside, i.e. curious tourists like us can have a peek through even when it is closed. And that's what we do as soon as we stop at its parking lot. The sight that bursts upon us is simply magnificent - the luminous blue waters of the pool, the steaming hot jacuzzi, the icy cold fjord, the glacially scoured mountains across it, and the Drangey island in the distance. All we want now is to jump over the fence and go in for a dip. But, instead, the only thing we can do is to seek shelter from the rising gale-force wind in our car and never poke our noses out until the storm subsides.",
				'tags' => 'iceland, travel, photography',
				'photo' => 'http://1.bp.blogspot.com/-OHZmNzPMiec/VKhZFFKXZRI/AAAAAAAAIQc/ChEwD3ruzbw/s1600/iceland54.jpg'
			]);
	}
}