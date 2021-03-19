import java.io.BufferedReader
import java.io.File
import java.io.IOException
import java.nio.file.Paths
import java.nio.file.Files

import java.util.stream.Stream

// TODO: somewhere in future: for json better us this: https://github.com/zogar1993/jsonkraken
fun main() {

    var isDemoMode = true
//    isDemoMode = false
    if(isDemoMode)
        println("isDemoMode\n")

    val property = System.getProperty("user.home")
    property.toString()

    var d0 = "$property/snap/0ad/199/.local/share/0ad/replays/0.0.24";
        d0 = "$property/snap/0ad/201/.local/share/0ad/replays/0.0.24/";

    /*
            /home/x/snap/0ad/201/.local/share/0ad/replays/0.0.24/
     */

//    val d1 = "$d0/2021-03-14_0016";
//    val f_dont_work = "$d0/2021-03-10_0011/commands.txt"
//    try {
//        var newFileName = readFileLineByLineUsingForEachLine2(f_dont_work)
//        println(newFileName)
//    } catch (ex: Exception) {
//    }
//    val r = Regex("""^a.*\.h$""")  // get all C header files beginning with 'a'
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
                val d2 = "$d0/$smallPrefix 0AD1v1 $newFileName";
                println("$d2")


if(false) {
    val buffer: BufferedReader = File(dFrom + "/commands.txt").bufferedReader()
    val stream: Stream<String> = buffer.lines()
    stream.forEach lit@{
//                    println(it)
        val regexNameCivString = """
    "Name":"(?<Name>[^"]+)".*?"Civ":"(?<Civ>\w+)".*?"Name":"(?<Name1>[^"]+)".*?"Civ":"(?<Civ1>\w+)"
            """.trim()
        val regexMapString = """
    "Name":"(?<Name>[^"]+)".*?"Civ":"(?<Civ>\w+)".*?"Name":"(?<Name1>[^"]+)".*?"Civ":"(?<Civ1>\w+)"
            """.trim()

        var Name: String
        var Civ: String
        var Name1: String
        var Civ1: String

        var regexNameCiv = Regex(regexNameCivString, RegexOption.IGNORE_CASE)
        var matched = regexNameCiv.find(it)?.groupValues
//                    val find = regex.find(it)
//                    println("end of regex")
        if (matched != null && matched.isNotEmpty()) {
            println("################ found############")

            Name = matched?.get(1)
            Civ = matched?.get(2)
            Name1 = matched?.get(3)
            Civ1 = matched?.get(4)

            Civ = civ_short2civ_long(Civ)
            Civ1 = civ_short2civ_long(Civ1)

            val newFileName = "$Name $Civ $Name1 $Civ1"

            return@lit // local return to the caller of the lambda, i.e. the forEach loop
        }
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

fun civ_short2civ_long(w_text:String): String {
    return w_text.replace("kush", "Kushites")
        .replace("maur", "Mauryans")
        .replace("brit", "Britons")
        .replace("ptol", "Ptolemies")
        .replace("sele", "Seleucid")
        .replace("rome", "Romans")
        .replace("cart", "Carthaginians")
};
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

fun test456(){
    File(".temp").walkTopDown()
}

// https://stackoverflow.com/a/66654983/2891692 :
fun readFileLineByLineUsingForEachLine2(fileName: String): String {

//    Files.lines(fileName, Charset.defaultCharset()) { lines ->
//        lines.forEachOrdered { line: String? ->
//            println(line)
//        }
//    }

    val useLines = File(fileName).useLines { lines ->
        var (name, civ, name1, civ1, gameSpeed, mapType, map) = lines
            .map {
                val regexString = """
"Name":"(?<Name>[^"]+)".*?
"Civ":"(?<Civ>\w+)".*?
"Name":"(?<Name1>[^"]+)".*?
"Civ":"(?<Civ1>\w+)".*?
"gameSpeed":(?<gameSpeed>[^,]+),
"mapType":"(?<mapType>[^"]+)",
"map":"(?<map>[^"]+)"
        """.trim()
            val regexStringOLD = """
"Name":"(?<Name>[^"]+)".*?
"Civ":"(?<Civ>\w+)".*?
"Name":"(?<Name1>[^"]+)".*?
"Civ":"(?<Civ1>\w+)".*?
            """.trim()

                var regex = Regex(regexString.replace("\n",""), RegexOption.IGNORE_CASE)
//                var matched = regex.find(it)?.groupValues
                regex.find(it)
            }
            .filterNotNull()
            .first()
            .destructured

        civ = civ_short2civ_long(civ)
        civ1 = civ_short2civ_long(civ1)

        name + "(" + civ + ") VS " + name1 + "(" + civ1 + "), " + gameSpeed + "xSpeed, " + mapType + " Map " + map.replace("/","∕")

//        Civ = civ_short2civ_long(Civ)
//        Civ1 = civ_short2civ_long(Civ1)



// https://www.compart.com/en/unicode/U+2215 Unicode Character “∕” (U+2215)

//            .First() will throw an exception if there's no row to be returned, while .FirstOrDefault()
    }
    println(useLines)
    return useLines
}

fun walkDirectory(dirPath: String, pattern: Regex): List<String> {
    val d = File(dirPath)
    require(d.exists() && d.isDirectory())
    return d.list().filter { it.matches(pattern) }
}
