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
                ping_test()
                
            }
        }
    }
}

def k(){
    println new Date()   
}

def ping_test() {
    sh """
       ping ftp.uadreams.com
       """
}
