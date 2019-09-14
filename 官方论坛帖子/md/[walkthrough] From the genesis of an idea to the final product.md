> I wanted to take the opportunity to walk through my process of creating my autofarms. While the viewers see the end product, there is usually very...

# [walkthrough] From the genesis of an idea to the final product
> I wanted to take the opportunity to walk through my process of creating my autofarms. While the viewers see the end product, there is usually very little insight into what it took to reach that end product. It is very much an iterative process - I don't usually start with grand conceptions, but instead begin working on relatively minor things and they start ballooning over time into much bigger and more elaborate constructions. The process isn't usually time consuming either, since it usually consists of a series of small jumps stretched out over a long period of time, and each jump consists of some minor improvement or incorporation of a new idea. Most of those new ideas come when not even playing Terraria ![:)](https://forums.terraria.org/styles/default/xenforo/clear.png "Smile    :)").
> 
> I wanted to specifically outline the process that ultimately led to the creation of the ALL-BOSS farm, since that has been one of my most ambitious projects of late. However, it had humble beginnings as a Duke Fishron autofarm more than half a year ago.
> 
> Not too long after Duke Fishron began challenging players after the 1.2.4 update, I decided to try to build an arena to more easily farm the Duke. I also decided not to rely on any exploits such as the slime damage prevention trick, since I only resort to them if I feel there's no other way to build the farm. I began by resorting to a very familiar set-up used to farm the Dungeon Guardian: two teleporters a sufficient distance apart with traps in between. I decided to use Spear trap batteries, using this basic set-up:
> 
> ![[​IMG]](http://i.imgur.com/Ia30J8E.jpg)
> 
> This might look familiar - a bird is summoned from a statue via a switch, passes over pressure plates that activate 1-second timers, and then a final pressure plate activates a dart trap which kills that bird. The result is a staggered activation of the 1-second timers, which in turn are hooked up to individual spear traps. The spear traps are actuated into the background and the actuators are removed to ensure they stay in the background. This set-up creates a nice stream of spears below the battery and comes close to reaching the maximum hit cap of 6 hits per second (the cap for anything that does piercing damage).
> 
> I used this set-up in my initial attempt at a Duke Fishron farm by creating many columns of spear trap batteries between two teleporters. This was the initial set-up:
> 
> ![[​IMG]](http://i.imgur.com/yrQXN0Z.jpg)
> 
> The two teleporters were joined via the red wire, which also passed through pressure plates on top of the teleporters. This allowed me to move back and forth between the two teleporters manually to get the "feel" for the Fishron fight. I added heart statues to replenish health in case I got hit. The wall switch in the rightmost teleporter box connected to a bird statue:
> 
> ![[​IMG]](http://i.imgur.com/JcAMqtj.jpg)
> 
> The red wire connected to the bird statue would not only spawn a bird, but also activate a 1 second timer to spawn more birds. The idea was to let the birds pass over the pressure plates continuously to keep triggering the spear trap batteries, and kill them with another wall switch connected to a dart battery via green wire. The blue wire connected to a 1-second timer was so I could activate the bird statue outside of the teleporter box.
> 
> So I then put a teleporter on the ground at the lip of the ocean and connected it to the left teleporter via green wire so that I could teleport there shortly after summoning Fishron. Then it was time to test the farm in action:
> 
> ![[​IMG]](http://i.imgur.com/Zgr8JDw.jpg)
> 
> After a few test runs I realized two things:
> 
> 1) Fishron didn't just move side to side as expected - he would move vertically as well, out of spear range.  
> 2) Fishron "cheats" by changing direction instantaneously when you teleport, so if he's rushing you he'll still hit you when you teleport away. The two teleport system wasn't cutting it, even when operating it manually.
> 
> I revised the build to address the two issues. To address the first issue, I created two more rows of spear trap batteries below the initial row of spear trap batteries, and snaked the wires around and through those additional rows of spear traps. To address the second issue I added a third teleporter and wired all three teleporters together, not having any clue if that would work (miraculously it did). Initially I added the third teleporter at a higher level then the two teleporters I started with, but subsequent tests revealed that sharknados and cthulhunados would reach that third teleporter box and kill me. So I shifted the teleporter box to ground level instead, below the two starting teleporters.
> 
> Here's what the new set-up looked like:
> 
> Top portion:
> 
> ![[​IMG]](http://i.imgur.com/jSqRrSM.jpg)
> 
> Bottom portion:
> 
> ![[​IMG]](http://i.imgur.com/rR5MyBx.jpg)
> 
> The wiring looks a bit more complicated, but it helps to think of it this way: there are 5 lines of wires that run through rows of spear traps, and these wires are connected to pressure plates in the bird engine. Offshoots from those wires connect to heart statues and spiky ball traps inside the teleport boxes. Next, the three teleporters are connected with separate wires between two teleporters (teleporter 1 is connected to teleporter 2, teleporter 2 is connected to teleporter 3, and teleporter 3 is connected to teleporter 1). A 1-second timer is added to one of those three wires (doesn't matter which as it turns out). Finally, tehre is a ground level teleporter that connects to one of the telepoters in the farm, so that the teleport system can be reached after Fishron is summoned.
> 
> Bird engine:
> 
> ![[​IMG]](http://i.imgur.com/fSLBM7g.jpg)
> 
> After some more runs the farm was fairly effective at killing the Duke, so now it was time to add some background walls to make the whole thing look like an actual structure:
> 
> ![[​IMG]](http://i.imgur.com/8i9BZ0E.jpg)
> 
> Next, it was time for some optimizations and an investigation into whether I could beat more than just Fishron with this farm. I tried combining Fishron with the 3 mechanical bosses:
> 
> ![[​IMG]](http://i.imgur.com/tgQAAWd.jpg)
> 
> Success! All 4 bosses could be killed with this farm! Now it was time for optimizations. First, there was no need to space the spear trap batteries so close together, since spears pierce and thus are capped at 6 hits per second. This meant that many traps weren't dealing damage because they were too close to each other. Second, Skeletron Prime would hover above the top row of spear trap batteries, so I would need to add a 4th row of batteries higher up to kill Skeletron Prime faster. Lastly, the bird engine was too erratic - as birds continuously passed over the plates it resulted in an irregular pattern of spears, and sometimes the birds would be killed by the bosses messing up the spear traps even further. The solution would be to change the bird engine so that instead of continuously summoning birds to pass over the pressure plates continuously, I would only summon one at the beginning and have the pressure plates turn on 1-second timers instead. I also increased the number of spear traps in a battery from 5 to 9, since testing revealed that 5 wasn't enough to hit mobs at the cap of 6 per second.
> 
> I also added more background walls to make the structure look better. This was the result:
> 
> ![[​IMG]](http://i.imgur.com/Tvy0Yox.jpg)
> 
> This was before I added the 4th row of spear traps. Shown above are the increased spaces between the batteries, and the bird engine now has timers in it. I also added more spear traps to each column to increase the likelihood of the bosses being hit 6 times per second.
> 
> In my next revision I added a lava tray at the very bottom to catch and burn up the hearts that are dropped by the mechanical bosses, to make sure that the heart statues in the teleport boxes supply hearts at a steady rate (hearts are not spawned if the limit of 10 hearts on the ground is reached in the world). Here's what the updated farm looked like:
> 
> ![[​IMG]](http://i.imgur.com/2IXyufM.jpg)
> 
> I realized that all 6 bosses could be fought if I added a Lihzahrd Altar near the bottom where the teleporter into the farm was located, although I cheated in a Plantera Bulb via TEdit so that I could summon Plantera. This turned out to be unnecessary since I could just create an underground jungle just below this farm and spawn a bulb there without cheating one in, and connect that underground jungle with this farm via a teleporter:
> 
> ![[​IMG]](http://cloud-4.steampowered.com/ugc/43111130782591134/694A782CC6EF604F63C6133A0B72FD8769BCB925/)
> 
> The teleporter was added after a bulb spawned (took about 6 hours for it to spawn, although the jungle surface was about 1/10th of what is depicted above). Here's what killing the 6 HM bosses looked like:
> 
> The final update to this farm was more cosmetic than anything, although I did extend the spear trap batteries to the sides of the teleporter boxes to cover even more surface where the bosses might go during the fight. Here is a recent version:
> 
> ![[​IMG]](http://imgur.com/ObEiiaC.jpg)
> 
> The final leap to the ALL-BOSS farm involved moving this autofarm to the underworld, and attaching a Wall of Flesh autofarm to it. It was also necessary to add 200 Ebonstone blocks, 200 crimstone blocks, and 80 jungle blcks (I used Temple blocks) within close proximity to every teleporter so that the Brain of Cthulhu, Eater of Worlds, and Queen Bee could be summoned. I also added a chute for the Guide Voodoo doll to the lava, and a room for the Clothier with spear traps overhead to spawn Skeletron:
> 
> ![[​IMG]](http://i.imgur.com/BVkRNQH.jpg)
> 
> ![[​IMG]](http://i.imgur.com/7rDcdvI.jpg)
> 
> Again, looks complicated until you break it up into smaller chunks. Most of the ALL-BOSS farm is the Fishron autofarm. To the right is the Wall of Flesh farm which is really nothing more than a tunnel 21 blocks wide (the minimum) to allow for all three Wall of Flesh eyes to fit, and a bunch of spear trap batteries along the tunnel. Note that in the tunnel are \*actuated\* blocks, not solid blocks - you cannot distinguish between them in the picture from TEdit, but if you look at the right edge where the tunnel begins, it carries through at that height all the way to the entry into the Fishron farm. Finally, I added the ocean above the underworld, and created a mini-jungle biome right beside it to spawn the Plantera bulb. I also added a chute for the Guide Voodoo doll to fall down into the lava in the underworld, and added a house for the Clothier with overhead spear traps to kill the Clothier once the farm is activated.
> 
> The sequence then is as follows:
> 
> From home base teleport into the area above the Plantera bulb and to the left of the ocean. Drop the Voodoo doll into the chute, where it will be trapped until the player teleports (the teleporter is also wired to actuated blocks where the voodoo doll is trapped, actuating those blocks and allowing the voodoo doll to drop into the lava). Then summon all the bosses except for the Wall of Flesh, Skeletron, and Golem. Then teleport to the edge of the Wall of Flesh tunnel - this allows the voodoo doll to drop into the lava summoning the WoF, and the player can summon Golem here. The teleportation also triggers the Skeleton statue to activate the 1 second timers that power all the spear traps in the farm, including those above the clothier in the room above the WoF tunnel. One more teleporter sends the player into the three-teleporter system and the killing of the bosses begins.
> 
> The end result, posted again for completeness:
> 
> So there it is, from the genesis of an idea to the final product!