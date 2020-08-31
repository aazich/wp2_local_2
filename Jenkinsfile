#!/usr/bin/groovy

pipeline {
    agent any
    options {
        disableConcurrentBuilds()
    }
 /*   parameters {
        string(name: 'Greeting', defaultValue: 'Hello', description: 'How should I greet the world?')
  }*/
    stages {
        stage('Example') {
            steps {
                //echo "${params.Greeting} World!"
                k()
            }
        }
    }
}

def k(){
    def ftpClient = new FTPClient()
    ftpClient.connect('ftp.uadreams.com')
    ftpClient.login("admin", "Bjb4xgbBb07bhZtb")

    def files = [ftpClient.listFiles()]
      if (files) {
           println(file.getName())
      }

    ftpClient.logout()
    ftpClient.disconnect()
}
