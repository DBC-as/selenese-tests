# Selenium tests for DBC websites

Dette repositorie indeholder grænsefladetests, der skal køres automatisk.

For at tilføje en test: 

- tilføj en linje i bibliotekdk.lst med filnavnet på testsuiten (eller opret/rediger en anden liste af testsuites til andre sites)
- lav en testsuite i selenium-IDE
- commit/push ændringerne til dette git-repositorie

----

Vi har nogle udvidelser til selenese når det køre automatisk: 
- Særlige values: `USER_LOGIN`, `USER_PASSWORD`, `ADMIN_LOGIN`, `ADMIN_PASSWORD` vil erstattes af brugernavne/passwords. NB: skriv _ikke_ brugernavne/kodeord etc. i selenese-filerne
- Base url ignoreres, men i stedet afhænger dette af tags for suiten
- Særlig test med navn `beforeEach`/`afterEach` køres før/efter hver eneste af de øvrige tests. Dette kan bruges til login, eller anden opsætning.

# Intro/noter til præsentation 12. januar 2012

- Overblik/intro til automatisk grænsefladetest
- Git opsætning
    - Download from http://code.google.com/p/msysgit/
    - Install
    - start "Git GUI" from start menu
    - `Help` -> `Show SSH Key` -> `Generate Key` og `Copy to Clipboard`
    - Åbn github.com i webbrowser, opret bruger og log ind
    - `Edit Your Profile` -> `SSH Public Keys` -> `Add another public key` -> paste / sæt nøglen ind, der blev kopieret fra Git GUI
    - Bliv tilføjet med skriverettigheder til organisationen DBC-as på github - hiv fat i Rasmus, eller en af de andre på listen over organisation members.
    - Find repositoriet `DBC-as/selenese-tests`, og klik på "HTTP", og kopier urlen (`https://` dit_bruger_navn `@github.com/DBC-as/selenese-tests.git`) til clipboard med knap til højre for urlen.
    - Vend tilbage til "Git GUI", og `Clone Existing Repository`, med den kopierede url som source repository, og target directory som stedet hvor det skal placeres
- Selenium-IDE
    - Installer/åbn *Firefox*
    - Åben http://release.seleniumhq.org/selenium-ide/1.5.0/selenium-ide-1.5.0.xpi i browseren, og sig ja til at installation. Dette installere Selenium-IDE i browseren.
    - Selenium-IDE kan herefter startes fra Tools-menuen i firefox.
    - Eksperimenter med at optage grænsefladeinteraktioner, husk at gem hver enkelt test
    - Gem til sidst hele suiten
- Commit af ændringer
    - Opdater bibliotekdk.lst
    - Start "Git GUI" og åbn repositoriet
    - Synkroniser med repositoriet: `Remote` -> `Fetch from` -> `origin`
    - Klik `Rescan` og herefter `Stage Changed` for at finde og forberede ændringerne
    - Gennemse ændringer under `Staged Changes (Will Commit)`
    - Lav beskrivelse af ændringerne under `Commit message`
    - Klik `Commit` og herefter `Push` for at gemme og uploade ændringerne
