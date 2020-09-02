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
                //k()
                //def ping_test()
                nc -zv "ftp.uadreams.com 21"
            }
        }
    }
}

def k(){
    println new Date()   
}

def ping_test() {
    nc -zv ftp.uadreams.com 21
}
