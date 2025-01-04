-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 04:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `branding_beez`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id_blog` int(11) NOT NULL,
  `blog_title` varchar(55) DEFAULT NULL,
  `blog_content` text DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id_blog`, `blog_title`, `blog_content`, `created_on`, `updated_on`) VALUES
(23, 'Cricket', 'I had the opportunity to interview former Indian wicket-keeper-batsman Deep Dasgupta once. I asked him about the toughest bowler he faced. Without batting an eyelid, Deep Dasgupta said, “Shaun Pollock. He would run in and bowl the same line and length throughout the day.” Sometimes, this is exactly what you need from a Test match bowler.\n\nBoland is a perfectly cut out Test match bowler. He loves to bowl long spells, loves running in and boy, does he love Virat Kohli or what? Once in World Test Championship Final 2023, once in the day-night Adelaide Test, once in the Boxing Day Test and twice in the ongoing Sydney Test in this series. Boland now has Kohli 5 times in Tests, the most by any bowler.\n\nThat is a remarkable record in itself. A lot of people may argue that bowlers now know how to get the big fish back in the hut early. Just bowl close to the off-stump in the corridor of uncertainty, keep harping on the 5th and 6th stump lines. Kohli knows it too. And of late, he’s leaving a lot of those too. But how does Boland get the better of him almost every time? The answer is simple. Boland is checkmating Kohli in terms of sheer patience.\n\nPatience is a term you usually associate with batsmen in Test cricket. Boland is proof that bowlers get paid for their patience too. He doesn’t have express pace like a Brett Lee, nor does he possess vicious swing like a Mitchell Starc, what he can do is hit the nagging, irritating line and length over and over again. Close to off stump, right in the corridor of uncertainty, hitting the good length-back of a good length, sometimes slightly fuller. For hours. For sessions. For days.\n\nIt simply amazes me to think that Boland would not have played in the ongoing series if Josh Hazlewood had made it to the playing XI. Hazlewood had to sit out twice, once with a side-strain and then with a calf injury. With Starc, Cummins, Hazlewood forming a formidable pace trio for Australia at home, replacement would have been difficult.', '2025-01-04 15:38:02', NULL),
(24, 'Entertainment', 'In comes Boland. Let’s look at his economy for the last two tests he has played. In the first innings of the Boxing Day Test, his economy was 2.11 after bowling 27 overs. That’s simply astonishing. Add the wickets of Rishabh Pant, Kohli and Akash Deep to it and suddenly the bowling figures look phenomenal. Equally good in the second innings, Boland finished with an economy of 2.43. He picked up the all important wicket of Ravindra Jadeja and then accounted for Akash Deep and Bumrah to mop up the tail.\n\nHowever, the best spell of Boland was kept for the first session of the ongoing Sydney Test. Bowling under overcast skies on a surface which has live grass, Boland found the key to success very quickly. The pitch played perfectly to his strengths. Boland kept hitting the same areas over and over again, allowing the pitch to do the rest. And the surface did not disappoint him.\n\nSome balls leapt up, others seamed both ways with appreciable carry to leave the Indian batters reeling. Jaiswal was unable to keep the leaping ball down, just when Kohli was looking set, Boland lured him with a fourth stump ball. The in-form Nitish Reddy was done in by a jaffa first ball. The ball hit the perfect length, seamed just a touch to square up Nitish who ended up giving catching practice to Steve Smith in the slip cordon. He also accounted for Rishabh Pant’s wicket and finished with 4 wickets and an economy of 1.55 in the first innings. After dismissing Pant and Reddy in the same over, Boland got a standing ovation from a full house SCG. That’s what he has earned. He is the crowd’s favourite without stupid stunts like  Sam Konstas but by sheer hard work and perseverance.\n\nIn the second innings, he has looked equally threatening so far, cleaning up the openers Jaiswal and Rahul, and once again accounting for Kohli. The Australian team will surely go to him again tomorrow again to restrict India quickly.\n\nDespite all his heroics, Boland knows he will once again start as a reserve when the Ashes come next year. Or will he? That’s one tough call the selectors will need to make. Also, Boland needs to showcase his skills outside Australia. But for now, Boland knows he has done his job. He has irritated the batters, bowled long, tireless, thankless spells, hit metronomic lines and lengths. His remarkable consistency of hitting the same areas throughout the day and his knack of picking wickets may remind you of a Glenn McGrath or a Shaun Pollock. Boland can be their rightful successor.', '2025-01-04 15:38:16', '2025-01-04 16:02:36'),
(25, 'Sports', 'Exactly three minutes left for the day’s play to end. Jasprit Bumrah was trying to rush through his over to make sure Mohammed Siraj got another crack at the Australian openers. Usman Khawaja, very rightly, was trying to delay things and waste precious seconds so that there was no extra over. All of this was within the rules. With the delay, Bumrah was getting a little restless and that’s when he complained to the umpire.\n\nThe India captain was very much within his rights to speak to the umpire to hasten things up. He was waiting on top of his mark when Khawaja was trying to waste time. It happened twice and Bumrah was clearly displeased.\n\nThat’s when Sam Konstas started giving Bumrah the verbal. Without any provocation, he got into the act and started walking towards the bowler. Intimidation? Or is it intimidatory only when the Indians do it?\n\nSome will say he is a 19-year-old. The truth is he is a brat. And he is trying to be cocky and trying to rile up the Indians. In the process, he is overdoing things. All of a sudden we see Bumrah charged up and a heated exchange follows. That wastes a valuable minute-and-a-half but what it also does is get Bumrah into the frame that he needed to be in. He takes his time to bowl the final two balls, the first of which was outside the off stump and Khawaja let it go.', '2025-01-04 15:39:16', NULL),
(26, 'Games', 'You could sense Bumrah was upset. With the last ball of the day he gets one to pitch exactly where Khawaja has struggled all series and all the opener does is edge it to slip. It was the moment of brilliance that India were waiting for. As the ball was travelling, you could see the anticipation in Bumrah’s eyes. He wanted the wicket badly. And the moment the catch was completed, he turned towards Konstas and took two steps. Clearly it was an all-out war out there. There was nothing civil anymore and the entire Indian team was charged up. They did give Konstas a bit of verbal and there is no doubt that they will come hard at him first thing tomorrow.\n\nIt is a cloudy and cool evening here in Sydney and there is no chance of the pitch changing too much. The red Kookaburra is just three overs old and Bumrah will be steaming in with Siraj and Prasidh Krishna there to back him up. The surface has enough for the Indian fast bowlers and it will be a massive Test for Konstas. In fact, it will be known tomorrow what he is made of. Can he take Bumrah on or will the world’s best fast bowler clean him up early and get into the middle order?\n\nThe Test is wonderfully set up. India may not have scored much but on a spicy deck, they are very much in the game. It is now to be seen how they use the new ball and make use of the conditions. But from what we have seen in the last three minutes, it could well be that Bumrah giving Australia hell tomorrow with the ball. Konstas more so.', '2025-01-04 15:39:30', NULL),
(27, 'Finance', 'Agnijit Sen in Sydney\n\nI had the opportunity to interview former Indian wicket-keeper-batsman Deep Dasgupta once. I asked him about the toughest bowler he faced. Without batting an eyelid, Deep Dasgupta said, “Shaun Pollock. He would run in and bowl the same line and length throughout the day.” Sometimes, this is exactly what you need from a Test match bowler.\n\nBoland is a perfectly cut out Test match bowler. He loves to bowl long spells, loves running in and boy, does he love Virat Kohli or what? Once in World Test Championship Final 2023, once in the day-night Adelaide Test, once in the Boxing Day Test and twice in the ongoing Sydney Test in this series. Boland now has Kohli 5 times in Tests, the most by any bowler.\n\nThat is a remarkable record in itself. A lot of people may argue that bowlers now know how to get the big fish back in the hut early. Just bowl close to the off-stump in the corridor of uncertainty, keep harping on the 5th and 6th stump lines. Kohli knows it too. And of late, he’s leaving a lot of those too. But how does Boland get the better of him almost every time? The answer is simple. Boland is checkmating Kohli in terms of sheer patience.\n\nPatience is a term you usually associate with batsmen in Test cricket. Boland is proof that bowlers get paid for their patience too. He doesn’t have express pace like a Brett Lee, nor does he possess vicious swing like a Mitchell Starc, what he can do is hit the nagging, irritating line and length over and over again. Close to off stump, right in the corridor of uncertainty, hitting the good length-back of a good length, sometimes slightly fuller. For hours. For sessions. For days.\n\nIt simply amazes me to think that Boland would not have played in the ongoing series if Josh Hazlewood had made it to the playing XI. Hazlewood had to sit out twice, once with a side-strain and then with a calf injury. With Starc, Cummins, Hazlewood forming a formidable pace trio for Australia at home, replacement would have been difficult.', '2025-01-04 15:39:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
