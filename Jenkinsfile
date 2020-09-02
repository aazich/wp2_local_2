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
set "server1="
ping ftp.uadreams.com |>nul find /i "TTL=" && set server1=ok
if defined server1 (goto server1_conn) else (goto err))
exit /B
:server1_conn
 echo "сервер доступен"
 exit /b
:err
 echo "сервер не доступен"
exit /b
       """
}
