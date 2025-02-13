import java.io.BufferedReader
import java.io.File
import java.io.IOException
import java.nio.file.Paths
import java.nio.file.Files

import java.util.stream.Stream

// promoted here: https://wildfiregames.com/forum/topic/37375-this-rename_0ad_replayskt-kotin-script-renames-the-replay-folder-names/?tab=comments#comment-420685


// TODO: somewhere in future: for json better us this: https://github.com/zogar1993/jsonkraken
fun main() {

    var isDemoMode = true
    isDemoMode = false
    if (isDemoMode)
        println("isDemoMode\n")

    val d0 = ".";  // Use the current directory as the base replay directory

    val r = Regex("""^[\d_\-]+$""")

    val files = walkDirectory(d0, r)
    for (d_fresh in files) {

        val smallPrefix = d_fresh.subSequence(0, 15)
        val fWithoutPath = "$d_fresh/commands.txt";
        val f = "$d0/$d_fresh/commands.txt";

        var file = File(f)
        var fileExists = file.exists()
        if (fileExists) {
            try {
                var newFileName = readFileLineByLineUsingForEachLine2(f)
                println()
                val dFrom = "$d0/$d_fresh"
                println(dFrom)
                val d2 = "$d0/$smallPrefix $newFileName";
                println("$d2")

                if (false) {
                    val buffer: BufferedReader = File(dFrom + "/commands.txt").bufferedReader()
                    val stream: Stream<String> = buffer.lines()
                    stream.forEach lit@{
                        // ... (rest of your regex-based name extraction logic) ...
                    }
                    buffer.close()
                }

                if (!isDemoMode)
                    moveDirectory(dFrom, d2)

                println()
            } catch (ex: Exception) {
                println(f)
            }
        }
    }
}

fun civ_short2civ_long(w_text: String): String {
    return w_text.replace("kush", "Kushites")
        .replace("maur", "Mauryans")
        .replace("brit", "Britons")
        .replace("ptol", "Ptolemies")
        .replace("sele", "Seleucid")
        .replace("rome", "Romans")
        .replace("cart", "Carthaginians")
}

fun moveDirectory(
    sourceFile: String,
    targetFile: String,
) {
    val sourceFilePath = Paths.get(sourceFile)
    val targetFilePath = Paths.get(targetFile)
    try {
        Files.move(sourceFilePath, targetFilePath)
    } catch (ex: FileAlreadyExistsException) {
        println("Target file already exists")
    } catch (ex: IOException) {
        System.out.format("I/O error: %s%n", ex)
    }
    println("test")
}

fun test456() {
    File(".temp").walkTopDown()
}

// https://stackoverflow.com/a/66654983/2891692 :

fun readFileLineByLineUsingForEachLine2(fileName: String): String {
// https://stackoverflow.com/a/66654983/2891692 :
//    Files.lines(fileName, Charset.defaultCharset()) { lines ->
//        lines.forEachOrdered { line: String? ->
//            println(line)
//        }
//    }
//    "Team":1,
    val lines = File(fileName).readLines()
    val line0 = lines[0].trim()
    val nrOfPlayers = line0.splitToSequence("{\"Name\"").count() - 1
    var regexString0oldStyle = ""
    regexString0oldStyle = """
"Name":"(?<Name>[^"]+)".*?
"Civ":"(?<Civ>\w+)".*?
"Name":"(?<Name1>[^"]+)".*?
"Civ":"(?<Civ1>\w+)".*?
"gameSpeed":(?<gameSpeed>[^,]+),
        """.trim()
    val regexString1 = regexString0oldStyle.replace("\n", "")
    val regex = Regex(regexString1, RegexOption.IGNORE_CASE)
    val matchResult0 = regex.find(line0)?.groupValues
    var regexMapTypeMap = ""
    regexMapTypeMap =
"""
"mapName":"(?<mapName>[^"]+)".*?
"mapType":"(?<mapType>[^"]+)"
""".trim()

    regexMapTypeMap = regexMapTypeMap.replace("\n", "")
    val regex2 = Regex(regexMapTypeMap, RegexOption.IGNORE_CASE)
    val matchResultMapTypeMap = regex2.find(line0)?.groupValues
//    val matchResult1 = regex.find(line0)
    var name0 = matchResult0?.get(1) ?: "UnknownName"
    var civ0 = matchResult0?.get(2) ?: "UnknownCiv"
    var name1 = matchResult0?.get(3) ?: "UnknownName"
    var civ1 = matchResult0?.get(4) ?: "UnknownCiv"
    var gameSpeed = matchResult0?.get(5) ?: "1"
    val civ0Short2civLong = civ_short2civ_long(civ0)
    val civ1Short2civLong1 = civ_short2civ_long(civ1)
    var mapType = matchResultMapTypeMap?.get(1) ?: "UnknownMapType"
    var mapName = matchResultMapTypeMap?.get(2) ?: "UnknownMap"
    var gameType = ""
    if (nrOfPlayers > 0) {
//            println("nrOfPlayers = $nrOfPlayers")
        if (nrOfPlayers == 2)
            gameType = "1v1"
        else if (nrOfPlayers == 4)
            gameType = "2v2"
        else if (nrOfPlayers == 6)
            gameType = "3v3"
        else if (nrOfPlayers == 8)
            gameType = "4v4"
    }
    var back =
        "0AD" + gameType + " " + name0 + "(" + civ0 + ") VS " + name1 + "(" + civ1 + "), " + gameSpeed + "xSpeed, " + mapType + " Map " + mapName.replace(
            "/",
            "∕")
    return back
//    return  "$gameType $name0 $civ0  $name1 $civ1 "
}


fun walkDirectory(dirPath: String, pattern: Regex): List<String> {
    val d = File(dirPath)
    if (!d.exists() || !d.isDirectory()) {
        println("Warning: Directory $dirPath does not exist or is not a directory.")
        return emptyList() // Return an empty list if the directory is invalid
    }
    return d.list()?.filter { it.matches(pattern) } ?: emptyList()
}
