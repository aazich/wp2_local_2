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
       while ping -c 1 -W 20 "$host" >& /dev/null
       do
          echo "Host reachable"
          break
       done
          echo "Host unreachable within 20 seconds"
          break
       """
}
