<section class="min-h-screen w-full relative font-serif overflow-x-hidden font-[Josefin_Sans,sans-serif]"
    style="background: radial-gradient(ellipse at 60% 0%, #23201A 0%, #191613 70%, #181410 100%); color: #FFD700;">
    <!-- Overlay BG IMAGE -->
    {{-- <div class="absolute inset-0 z-0 bg-center bg-cover bg-no-repeat" style="background-image: url('{{ asset('images/prx-bg-image.png') }}');"></div> --}}
    <!-- Dark Overlay -->
    {{-- <div class="absolute inset-0 z-10 bg-black/70"></div> --}}
    
    <div class="relative z-20 max-w-6xl mx-auto px-5 lg:px-0 pt-6 pb-16">
        <!-- TOP NAV -->
        <nav class="flex items-center justify-between border-b border-[#7B6426] pb-3 mb-8">
            <div class="flex gap-10 text-base uppercase font-semibold tracking-widest">
                <a href="#" class="hover:text-[#D1A13A] transition">MORE ABORT US US</a>
                <a href="#" class="hover:text-[#D1A13A] transition">DOWNLOAD</a>
                <a href="#" class="hover:text-[#D1A13A] transition">RANKINGS</a>
                <a href="#" class="hover:text-[#D1A13A] transition">COMMUNITY</a>
            </div>
            <div>
                <a href="#" class="inline-block px-2 py-1 text-xl hover:text-[#FFD700] transition">&rarr;</a>
            </div>
        </nav>

       <!-- HERO ROW -->
       <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-[80px] mt-10 md:mt-20">
            <!-- Left: Logo & Download Button -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/upscalemedia-transformed(1).png') }}" alt="PRX Logo"
                    class="w-[300px] md:w-[450px] select-none pointer-events-none">
              <a href="#"
                    class="mt-10 prx-octagon inline-block px-10 py-4 font-bold uppercase tracking-wide text-[#FFE07A] border border-[#FFD700] shadow-[0_2px_8px_#D1A13A33] text-xl transition-all duration-200"
                    style="
                        background: linear-gradient(180deg, #3a2f16 0%, #18140c 100%);
                        box-shadow: 0 2px 8px 0 #00000033, 0 0 0 1px #FFD700 inset;
                        letter-spacing: 1px;
                    ">
                    DOWNLOAD NOW
            </a>

            </div>
            <!-- Right: Login Box -->
            <div class="flex flex-col items-center">
                <div class="w-full md:w-[350px] rounded-xl border-4 border-[#9d7c32] bg-black/30 p-8 flex flex-col items-center shadow-xl"
                    style="box-shadow:0 4px 32px 0 #0009;">
                    <h2 class="text-[#FFD700] font-bold text-2xl text-center mb-7 tracking-wider uppercase">LOGIN</h2>
                    <input type="text"
                        placeholder="Username"
                        class="w-full mb-4 px-4 py-4 rounded text-lg bg-[#1A1815] border border-[#FFD700] text-[#FFD700] placeholder-[#FFD70099] focus:outline-none focus:ring-2 focus:ring-[#FFD700]/40">
                    <input type="password"
                        placeholder="Password"
                        class="w-full mb-6 px-4 py-4 rounded text-lg bg-[#1A1815] border border-[#FFD700] text-[#FFD700] placeholder-[#FFD70099] focus:outline-none focus:ring-2 focus:ring-[#FFD700]/40">
                    <button class="w-full py-4 rounded border border-[#FFD700] bg-[#FFD700] text-[#191513] font-bold tracking-wider text-lg mb-3 hover:bg-[#D1A13A] hover:text-black transition">
                        Log in
                    </button>
                    <div class="flex w-full justify-end">
                        <a href="#" class="text-base text-[#FFD700bb] hover:text-[#FFD700] transition">Forgot password ?</a>
                    </div>
                </div>
            </div>

        </div>


    <div class="relative max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 items-start mt-16">
        <!-- LEFT: SERVER INFO -->
       <div class="z-10 flex flex-col justify-center">
            <div class="w-full border-t-2 border-[#9d7c32] mb-8"></div>
            <!-- SERVER INFO: Super Large -->
             <h2 class="text-[#FFD700] text-4xl md:text-5xl font-semibold tracking-wide mb-2" style="letter-spacing:0.03em;">
                SERVER INFO
            </h2>
            <div class="w-48 border-t border-[#9d7c32] mb-7 mt-2"></div>
            <!-- WELCOME: Larger, but less than h2 -->
             <h3 class="text-[#FFD700] text-2xl md:text-3xl font-bold tracking-wide uppercase mb-6" style="font-weight:600; letter-spacing:0.04em;">
                WELCOME TO PRX RAGNAROK
            </h3>
            <!-- BODY TEXT -->
            <div class="text-[#e2c86d] font-normal text-[1.1rem] tracking-wide leading-relaxed space-y-1 max-w-xl font-[Josefin_Sans,sans-serif]" style="letter-spacing:0.015em;">
                <p>With the Ragnarokus for grnting meets good times.</p>
                <p>Whether youre here to lios your Myb drops or up</p>
                <p>Well use with friends in PPE welcoming</p>
                <p>Buity your dream character, chase the prRybor.</p>
                <p>or start natl chaos and build your galem in Yo tRO</p>
            </div>
        </div>

        <!-- RIGHT: BIG MASCOT -->
        <div class="flex items-center justify-center z-0 relative h-full">
            <img src="{{ asset('images/prx-mascot4.png') }}"
                alt="Mascot"
                class="w-full max-w-none md:max-w-[1200px] xl:max-w-[1500px] h-auto object-contain pointer-events-none select-none drop-shadow-[0_8px_40px_rgba(255,215,0,0.16)]"
                style="min-width: 420px;"
                draggable="false" loading="lazy">
        </div>
    </div>



      <div class="w-full mt-12 font-[Josefin_Sans,sans-serif]">
        <!-- FULL-WIDTH BORDER LINE -->
        <div class="w-full border-t border-[#9d7c32] mb-8"></div>
        <!-- WIKI TITLE -->
        <h2 class="text-[#FFD700] text-4xl md:text-5xl font-semibold tracking-wide mb-4" style="letter-spacing:0.03em;">
            WIKI
        </h2>
        <div class="w-full flex flex-col md:flex-row items-stretch justify-center gap-10">
            <!-- Left Box -->
            <div class="flex-1 max-w-xl bg-transparent border border-[#9d7c32] rounded-lg overflow-hidden mx-auto">
                <div class="bg-transparent border-b border-[#9d7c32] p-4">
                    <h3 class="text-lg font-bold text-[#FFD700] uppercase text-center">GENERAL INFORMATION</h3>
                </div>
                <table class="w-full text-[#FFD700]">
                    <tbody class="text-base">
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]" >Server Episode</td>
                            <td class="py-3 px-4 text-left">Pre Renewal 10.3</td>
                        </tr>
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Max Base / Job</td>
                            <td class="py-3 px-4 text-left">99 / 70</td>
                        </tr>
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Max ASPD</td>
                            <td class="py-3 px-4 text-left">190</td>
                        </tr>
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">EXP Rates</td>
                            <td class="py-3 px-4 text-left">15x</td>
                        </tr>
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Drop Rate (Normal)</td>
                            <td class="py-3 px-4 text-left">1.00%</td>
                        </tr>
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">MVP Card Rate</td>
                            <td class="py-3 px-4 text-left">1.00%</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Instant Cast</td>
                            <td class="py-3 px-4 text-left">150 DEX</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Right Box -->
            <div class="flex-1 max-w-xl bg-transparent border border-[#9d7c32] rounded-lg overflow-hidden mx-auto">
                <div class="bg-transparent border-b border-[#9d7c32] p-4">
                    <h3 class="text-lg font-bold text-[#FFD700] uppercase text-center">ADDITIONAL INFORMATION</h3>
                </div>
                <table class="w-full text-[#FFD700]">
                    <tbody class="text-base">
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Language</td>
                            <td class="py-3 px-4 text-left">English only in global channels</td>
                        </tr>
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Server Location</td>
                            <td class="py-3 px-4 text-left">Asia (Philippines)</td>
                        </tr>
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Custom Features</td>
                            <td class="py-3 px-4 text-left">Costume System, Daily Rewards, Quest NPCs, Battlegrounds, Events, Party vs Party, Ranking System</td>
                        </tr>
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Events</td>
                            <td class="py-3 px-4 text-left">Automated & Manual</td>
                        </tr>
                        <tr class="border-b border-[#FFD70033]">
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Discord</td>
                            <td class="py-3 px-4 text-left">Join our server</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 border-r border-[#9d7c32]">Woe Schedule</td>
                            <td class="py-3 px-4 text-left">To be Announced</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<!-- HOT FEATURES / GAME HIGHLIGHTS -->
<div class="w-full mt-24 px-2">
    <div class="w-full border-t border-[#9d7c32] mb-20"></div>
  <h2 class="text-[#FFD700] text-4xl md:text-5xl font-bold mb-10 tracking-wide text-center" style="letter-spacing:0.04em;">
    WHY PLAY ON PRX?
  </h2>
  <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Feature Card 1 -->
    <div class="bg-[#191513] rounded-xl border border-[#FFD700] shadow-xl p-8 flex flex-col items-center text-center hover:scale-105 transition-transform duration-200">
      <img src="/images/icons/quest.svg" alt="Quests" class="w-16 h-16 mb-4 select-none pointer-events-none" draggable="false" />
      <h3 class="text-2xl font-bold text-[#FFD700] mb-2" style="font-family: 'Josefin Sans',sans-serif;">Unique Quests</h3>
      <p class="text-[#FFD700cc] text-base">Original storylines, custom questlines, and hidden side missions await adventurers!</p>
    </div>
    <!-- Feature Card 2 -->
    <div class="bg-[#191513] rounded-xl border border-[#FFD700] shadow-xl p-8 flex flex-col items-center text-center hover:scale-105 transition-transform duration-200">
      <img src="/images/icons/headgear.svg" alt="Custom Headgears" class="w-16 h-16 mb-4 select-none pointer-events-none" draggable="false" />
      <h3 class="text-2xl font-bold text-[#FFD700] mb-2">Custom Headgears</h3>
      <p class="text-[#FFD700cc] text-base">Collect, craft, and show off hundreds of exclusive headgears—no pay-to-win!</p>
    </div>
    <!-- Feature Card 3 -->
    <div class="bg-[#191513] rounded-xl border border-[#FFD700] shadow-xl p-8 flex flex-col items-center text-center hover:scale-105 transition-transform duration-200">
      <img src="/images/icons/pvp.svg" alt="PvP and WoE" class="w-16 h-16 mb-4 select-none pointer-events-none" draggable="false" />
      <h3 class="text-2xl font-bold text-[#FFD700] mb-2">Active PvP & WoE</h3>
      <p class="text-[#FFD700cc] text-base">Daily PvP, classic and custom War of Emperium with real rewards.</p>
    </div>
    <!-- Feature Card 4 -->
    <div class="bg-[#191513] rounded-xl border border-[#FFD700] shadow-xl p-8 flex flex-col items-center text-center hover:scale-105 transition-transform duration-200">
      <img src="/images/icons/gm.svg" alt="Active GM" class="w-16 h-16 mb-4 select-none pointer-events-none" draggable="false" />
      <h3 class="text-2xl font-bold text-[#FFD700] mb-2">Active GM Team</h3>
      <p class="text-[#FFD700cc] text-base">Responsive, fair staff. Regular in-game events and quick support.</p>
    </div>
    <!-- Feature Card 5 -->
    <div class="bg-[#191513] rounded-xl border border-[#FFD700] shadow-xl p-8 flex flex-col items-center text-center hover:scale-105 transition-transform duration-200">
      <img src="/images/icons/fair.svg" alt="Zero Pay-to-Win" class="w-16 h-16 mb-4 select-none pointer-events-none" draggable="false" />
      <h3 class="text-2xl font-bold text-[#FFD700] mb-2">Zero Pay-to-Win</h3>
      <p class="text-[#FFD700cc] text-base">Play fair. No game-breaking donations. All gears obtainable in-game.</p>
    </div>
    <!-- Feature Card 6 -->
    <div class="bg-[#191513] rounded-xl border border-[#FFD700] shadow-xl p-8 flex flex-col items-center text-center hover:scale-105 transition-transform duration-200">
      <img src="/images/icons/event.svg" alt="New Player Events" class="w-16 h-16 mb-4 select-none pointer-events-none" draggable="false" />
      <h3 class="text-2xl font-bold text-[#FFD700] mb-2">New Player Events</h3>
      <p class="text-[#FFD700cc] text-base">Weekly newbie boosts, starter packs, leveling parties, and more.</p>
    </div>
  </div>
</div>


<!-- TOP PLAYERS / GUILD RANKINGS PREVIEW -->
<div class="w-full mt-24 px-2">
    <div class="w-full border-t border-[#9d7c32] mb-20"></div>
  <h2 class="text-[#FFD700] text-3xl md:text-4xl font-bold mb-7 tracking-wide text-center" style="letter-spacing:0.03em;">
    TOP PLAYERS & GUILDS
  </h2>
  <div class="max-w-4xl mx-auto bg-[#191513ee] border border-[#FFD700] rounded-2xl overflow-hidden shadow-lg">
    <table class="w-full text-[#FFD700] text-lg">
      <thead>
        <tr class="bg-[#1c180f]">
          <th class="py-3 px-6 text-left">#</th>
          <th class="py-3 px-6 text-left">Player</th>
          <th class="py-3 px-6 text-left">Class</th>
          <th class="py-3 px-6 text-left">Level</th>
          <th class="py-3 px-6 text-left">Guild</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-t border-[#FFD70033] hover:bg-[#222017] transition">
          <td class="py-2 px-6">1</td>
          <td class="py-2 px-6 font-bold text-lg text-[#FFD700]">CeciliaRO</td>
          <td class="py-2 px-6">High Priest</td>
          <td class="py-2 px-6">99/70</td>
          <td class="py-2 px-6">Sanctuary</td>
        </tr>
        <!-- ...more rows... -->
      </tbody>
    </table>
    <div class="p-4 text-center">
      <a href="/rankings" class="inline-block px-6 py-2 rounded border border-[#FFD700] text-[#FFD700] hover:bg-[#FFD700] hover:text-[#191513] font-bold tracking-wider transition mt-3">
        See Full Rankings
      </a>
    </div>
  </div>
</div>


<!-- NEWS & ANNOUNCEMENTS -->
<div class="w-full mt-24 px-2">
    <div class="w-full border-t border-[#9d7c32] mb-20"></div>
  <h2 class="text-[#FFD700] text-4xl md:text-5xl font-bold mb-10 tracking-wide text-center" style="letter-spacing:0.04em;">
    NEWS & ANNOUNCEMENTS
  </h2>
  <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- News Card 1 -->
    <div class="bg-[#191513] rounded-xl border border-[#FFD700] shadow-lg p-7 flex flex-col">
      <span class="text-xs uppercase tracking-widest text-[#FFD700bb] mb-2">Jul 30, 2025</span>
      <h3 class="text-2xl font-bold text-[#FFD700] mb-2">Episode 10.3 Launch!</h3>
      <p class="text-[#FFD700cc] flex-1">PRX is now live! Get ready for exclusive rewards, new dungeons, and a launch event you can’t miss.</p>
      <a href="/news/episode-launch" class="mt-4 self-end text-[#FFD700] underline hover:text-[#FFD700cc] font-bold text-sm">Read More</a>
    </div>
    <!-- News Card 2 -->
    <div class="bg-[#191513] rounded-xl border border-[#FFD700] shadow-lg p-7 flex flex-col">
      <span class="text-xs uppercase tracking-widest text-[#FFD700bb] mb-2">Jul 25, 2025</span>
      <h3 class="text-2xl font-bold text-[#FFD700] mb-2">Welcome to PRX!</h3>
      <p class="text-[#FFD700cc] flex-1">Join our Discord, meet the staff, and check out our launch events with double EXP and loot rates for new players!</p>
      <a href="/news/welcome" class="mt-4 self-end text-[#FFD700] underline hover:text-[#FFD700cc] font-bold text-sm">Read More</a>
    </div>
    <!-- More News: Copy cards or load from DB -->
  </div>
  <div class="text-center mt-6">
    <a href="/news" class="inline-block px-8 py-2 rounded border border-[#FFD700] text-[#FFD700] hover:bg-[#FFD700] hover:text-[#191513] font-bold tracking-wider transition mt-3">
      View All News
    </a>
  </div>
</div>


<!-- STARTER PACK / WELCOME GIFT -->
<div class="w-full mt-24 px-2">
    <div class="w-full border-t border-[#9d7c32] mb-20"></div>
  <h2 class="text-[#FFD700] text-4xl md:text-5xl font-bold mb-10 tracking-wide text-center" style="letter-spacing:0.04em;">
    WELCOME GIFT FOR NEWBIES!
  </h2>
  <div class="max-w-3xl mx-auto flex flex-col md:flex-row items-center bg-[#191513] rounded-xl border border-[#FFD700] shadow-xl p-8 gap-8">
    <div class="flex-shrink-0">
      <img src="/images/icons/gift.svg" alt="Welcome Gift" class="w-28 h-28 drop-shadow-xl pointer-events-none select-none" />
    </div>
    <div>
      <h3 class="text-2xl font-bold text-[#FFD700] mb-2">Claim your Starter Pack!</h3>
      <ul class="list-disc pl-6 text-[#FFD700cc] text-lg mb-3">
        <li>Exclusive Costume Headgear</li>
        <li>Beginner Equipment Set</li>
        <li>7-Day VIP Service</li>
        <li>Free Bubbles Gum & Field Manuals</li>
        <li>Pet Egg & Food Pack</li>
        <li>Zeny & Useful Consumables</li>
      </ul>
      <a href="/register" class="inline-block px-8 py-3 rounded border border-[#FFD700] bg-[#FFD700] text-[#191513] font-bold uppercase tracking-wide hover:bg-[#D1A13A] hover:text-black transition shadow">
        Register Now
      </a>
    </div>
  </div>
</div>



<!-- COMMUNITY & SOCIAL LINKS -->
<div class="w-full mt-24 px-2">
    <div class="w-full border-t border-[#9d7c32] mb-20"></div>
  <h2 class="text-[#FFD700] text-4xl md:text-5xl font-bold mb-10 tracking-wide text-center" style="letter-spacing:0.04em;">
    JOIN THE COMMUNITY
  </h2>
  <div class="max-w-3xl mx-auto flex flex-wrap justify-center gap-7">
    <!-- Discord -->
    <a href="https://discord.gg/yourprxdiscord" target="_blank"
      class="flex items-center gap-3 px-7 py-4 rounded-lg border border-[#FFD700] text-[#FFD700] hover:bg-[#FFD700] hover:text-[#191513] text-xl font-bold tracking-wider shadow transition">
      <img src="/images/icons/discord.svg" class="w-8 h-8" alt="Discord" />
      Discord
    </a>
    <!-- Facebook -->
    <a href="https://facebook.com/yourprxpage" target="_blank"
      class="flex items-center gap-3 px-7 py-4 rounded-lg border border-[#FFD700] text-[#FFD700] hover:bg-[#FFD700] hover:text-[#191513] text-xl font-bold tracking-wider shadow transition">
      <img src="/images/icons/facebook.svg" class="w-8 h-8" alt="Facebook" />
      Facebook
    </a>
    <!-- X/Twitter -->
    <a href="https://twitter.com/yourprxtwitter" target="_blank"
      class="flex items-center gap-3 px-7 py-4 rounded-lg border border-[#FFD700] text-[#FFD700] hover:bg-[#FFD700] hover:text-[#191513] text-xl font-bold tracking-wider shadow transition">
      <img src="/images/icons/twitter.svg" class="w-8 h-8" alt="Twitter/X" />
      Twitter/X
    </a>
    <!-- Add more socials if needed -->
  </div>
</div>













    </div>

    <!-- THIN OUTLINE BORDERS LIKE REFERENCE -->
    <div class="absolute inset-0 z-30 pointer-events-none">
        <div class="border-t border-[#7B6426] w-full absolute top-0"></div>
        <div class="border-b border-[#7B6426] w-full absolute bottom-0"></div>
        <div class="border-l border-[#7B6426] h-full absolute left-0"></div>
        <div class="border-r border-[#7B6426] h-full absolute right-0"></div>
    </div>
</section>
