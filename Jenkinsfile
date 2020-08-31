#!/usr/bin/groovy

pipeline {
    agent any
    options {
        disableConcurrentBuilds()
    }
    parameters {
        string(name: 'Greeting', defaultValue: 'Hello', description: 'How should I greet the world?')
    }
    stages {
        stage('Example') {
            steps {
                //echo "${params.Greeting} World!"
                f()
            }
        }
    }
}


//def f(){
//     def ftpClient = new FTPClient()
 //        ftpClient.connect("ftp server address here")
 //        ftpClient.enterLocalPassiveMode()
 //        println(ftpClient.replyString)
 //        ftpClient.login("username","password")
 //        println(ftpClient.replyString)
  //       ftpClient.changeWorkingDirectory("directory the file is in")
   //      println(ftpClient.replyString)
 //        ftpClient.fileType=(FTPClient.BINARY_FILE_TYPE)
  //       println(ftpClient.replyString)
//}
def f(){
echo "${params.Greeting} World second!"
}
