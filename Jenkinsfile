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
            withSonarQubeEnv("Sonarqube-Local") {
            sh "${tool("SonarqubeLocal")}/bin/sonar-scanner \
            -Dsonar.projectKey=web-vmrecio-tfm \
            -Dsonar.sources=. \
            -Dsonar.host.url=http://51.68.7.93:9100 \
            -Dsonar.login=00afcffbddc861aa0d3e27e067ad36e36c4bb138 \
            -Dsonar.webhooks.project=http://51.68.7.93:9000/sonarqube-webhook/"
                }
            }
      }
    }
    stage('Sonar:QG') {
          steps {
              sleep(20)  /* Added 10 sec sleep that was suggested in few places*/
              script{
                  def tries = 0
                  sonarResultStatus = "PENDING"
                  while ((sonarResultStatus == "PENDING" || sonarResultStatus == "IN_PROGRESS") && tries++ < 5) {
                      try {
                          sonarResult = waitForQualityGate abortPipeline: true
                          sonarResultStatus = sonarResult.status
                      } catch(ex) {
                          echo "caught exception ${ex}"
                      }
                      echo "waitForQualityGate status is ${sonarResultStatus} (tries=${tries})"
                  }
                  if (sonarResultStatus != 'OK') {
                      error "Quality gate failure for SonarQube: ${sonarResultStatus}"
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