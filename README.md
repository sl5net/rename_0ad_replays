# rename_0ad_replays

This Kotlin script automatically renames replay folder names for the 0 A.D. real-time strategy game to include more useful information, such as player names, civilizations, and map details.

## Prerequisites

*   **Java Runtime Environment (JRE):** You need a Java Runtime Environment (JRE) version 8 or later installed. You can check your Java version by running `java -version` in your terminal. If Java is not installed, download and install it from [https://www.oracle.com/java/technologies/javase-jre8-downloads.html](https://www.oracle.com/java/technologies/javase-jre8-downloads.html) or use your system's package manager.
*   **Kotlin Compiler (kotlinc):** You need the Kotlin command-line compiler. The easiest way to get this is to use SDKMAN!

## Installation and Setup

**1. Install SDKMAN! (Recommended):**

SDKMAN! is a version manager that simplifies installing and managing SDKs (including Kotlin) on Linux, macOS, and similar systems.

   *   **Install SDKMAN!** (If you don't already have it)
        ```bash
        curl -s "https://get.sdkman.io" | bash
        source "$HOME/.sdkman/bin/sdkman-init.sh"  # Or follow the instructions printed by the installer
        ```

   *   **Install Kotlin:**
        ```bash
        sdk install kotlin
        ```

   *   **Verify Installation:**
        ```bash
        kotlin -version
        ```
        This should print the Kotlin version.  Make sure it is 1.6 or later.

**2. Download the Script:**

*   Download the `rename_0ad_replays.kt` file to your computer.

**3.  Configure the Script (Important):**

*   **Navigate to your 0 A.D. replay directory.** The default location varies depending on your operating system and installation method. Here are some common locations:

    *   **Linux (Snap):** `~/snap/0ad/<version>/.local/share/0ad/replays/0.27.0` (Replace `<version>` with the specific Snap version number, e.g., `201`, `242`, etc.)
    *   **Linux (Standard):** `~/.local/share/0ad/replays/0.27.0`
    *   **Windows:** `C:\Users\<YourUsername>\Documents\My Games\0 A.D. Public Alpha\replays\0.27.0`
*   **Move** the `rename_0ad_replays.kt` file into the replay directory.
*   **Edit the script to work in your folder** Change the $d0 to "."

**4. Compile the script**

*To run the script, we navigate to the file first. Then compile the code with the command*
````Bash
cd ~/.local/share/0ad/replays/0.27.0
clear; kotlinc rename_0ad_replays_a27.kt -include-runtime -d rename_0ad_replays_a27.jar
content_copy
download
Use code with caution.
Markdown

5. Executing the jar
You are now prepared to run it with java and call the jar

java -jar rename_0ad_replays_a27.jar
content_copy
download
Use code with caution.
Bash
Advanced Configuration

isDemoMode: Set this variable to true for a dry run (no actual renaming) or false to enable renaming.

d0 (Replay Directory): The script now automatically detects and is run in the current directory.

walkDirectory the core function for iterating across the directory, must be made valid by:

Correct regex statements. Regex statements are highly delicate, make sure they are proper, including: ""mapType"":""(?<mapType>[^"]*?)"".""mapName"":""(?<mapName>[^"]*?)"" "" - where all square brackets are removed are confirmed.

Troubleshooting

"Target file already exists": If the script encounters a directory with the same name as the new name, it will print this message and skip the renaming. This prevents data loss. You may want to manually delete the target file and rerun.

"Directory doesn't exist": If you face an error that says can't locate file, then the directory is not correct.

"Could not find or load main class": If you get this error you need to recheck every step, but its more than likeley that you need to add -classpath gson-2.10.1.jar. The other thing you can do is to make sure you added -include-runtime to the kotlinc call.

Advanced usage

The user, after getting all this to function properly.
Is also interested in a kscript. If that is a future need, here are the steps

kscript is a tool specifically designed to make Kotlin scripting easier:

Install kscript: (Follow the instructions on their GitHub page: https://github.com/holgerbrandl/kscript)

It typically involves downloading a script and running it:

curl -s "https://get.kscript.org" | bash -s
content_copy
download
Use code with caution.
Bash

Run Your Script with kscript:

kscript rename_0ad_replays.kt
content_copy
download
Use code with caution.
Bash

Disclaimer: I will not help set up kscript as that is for future use. This is outside my capacity.

Important Considerations:

User Configuration: This guide assumes basic familiarity with using the command line and setting environment variables. If you're new to these concepts, you might need to consult additional resources.

That completes the setup for your readme file, but I would like to restate the key points and assumptions for this task.

The user has verified that java works

The user has verified that kotlin version has proper version.

If errors are being thrown after proper setup. You need to reset the system.

I wish you good luck in setting it up, feel free to respond with any further question or modifications if you are having difficulties.
