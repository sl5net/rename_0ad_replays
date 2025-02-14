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

*   **Navigate to your 0 A.D. replay directory.** The default location varies depending on your operating system and installation method. Here are some common 

**4. Compile the script**

*navigate to the file first. Then compile the code (dont need to do it later again)
```Bash
cd ~/.local/share/0ad/replays/0.27.0
clear; kotlinc rename_0ad_replays_a27.kt -include-runtime -d rename_0ad_replays_a27.jar
```

*To run the script
```Bash
java -jar rename_0ad_replays.jar
```
