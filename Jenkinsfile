pipeline {
  environment {
    registry = "vmreciosum/prueba_web_pipeline"
    registryCredential = 'dockerhub'
    dockerImage = ''
  }
  agent any
  stages {
    stage('Cloning Git') {
      steps {
        git branch: 'develop', url: 'https://github.com/vmrecio-sum/web-tfm.git'
      }
    }
    stage('Code Quality Check via SonarQube') {
    steps {
        script {
        def scannerHome = tool 'SonarqubeLocal';
            withSonarQubeEnv("Sonarqube-Local") {
            sh "${tool("SonarqubeLocal")}/bin/sonar-scanner \
            -Dsonar.projectKey=web-vmrecio-tfm \
            -Dsonar.sources=. \
            -Dsonar.host.url=http://51.68.7.93:9100 \
            -Dsonar.login=00afcffbddc861aa0d3e27e067ad36e36c4bb138"
                }
            Integer waitSeconds = 10
            Integer timeOutMinutes = 10
            Integer maxRetry = (timeOutMinutes * 60) / waitSeconds as Integer
            for (Integer i = 0; i < maxRetry; i++) {
              try {
                timeout(time: waitSeconds, unit: 'SECONDS') {
                  def qg = waitForQualityGate()
                  if (qg.status != 'OK') {
                    error "Sonar quality gate status: ${qg.status}"
                  } else {
                    i = maxRetry
                  }
                }
              } catch (Throwable e) {
                if (i == maxRetry - 1) {
                  throw e
                }
              }
            }
            }
        }
    }
    stage('Building image') {
      steps{
        script {
          dockerImage = docker.build(registry + ":$BUILD_NUMBER", "-f Dockerfile_Web .")  
        }
      }
    }
    stage('Deploy Image') {
      steps{
        script {
          docker.withRegistry( '', registryCredential ) {
            dockerImage.push()
          }
        }
      }
    }
    stage('Remove Unused docker image') {
      steps{
        sh "docker rmi $registry:$BUILD_NUMBER"
      }
    }
  }
}