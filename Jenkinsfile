pipeline {
  environment {
    registry = "vmreciosum/prueba_web_pipeline"
    registryCredential = 'dockerhub'
    dockerImage = ''
    KUBECONFIG_DATA = credentials('kubeconfig')
  }
  agent any
  stages {
/*
    stage('Cloning Git') {
      steps {
        git branch: 'develop', url: 'https://github.com/vmrecio-sum/web-tfm.git'
      }
    }
    stage('Code Quality Check SonarQube') {
      steps {
        script {
            withSonarQubeEnv("Sonarqube-Local") {
            sh "${tool("SonarqubeLocal")}/bin/sonar-scanner \
            -Dsonar.projectKey=web-vmrecio-tfm \
            -Dsonar.sources=. \
            -Dsonar.host.url=http://51.68.7.93:9100 \
            -Dsonar.login=f7ae410f5d94763c3caadf207c17e5da44a551e7 \
            -Dsonar.webhooks.project=http://51.68.7.93:9000/sonarqube-webhook/"
                }
            }
      }
    }
    stage('QualityGate SonarQube') {
          steps {
              sleep(20)  
              script{
                  def tries = 0
                  sonarResultStatus = "PENDING"
                  while ((sonarResultStatus == "PENDING" || sonarResultStatus == "IN_PROGRESS") && tries++ < 30) {
                      try {
                          sonarResult = waitForQualityGate(webhookSecretId: 'gL3hBtRtgpVfmItA7ZEq')    
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
*/
    stage('Preparation Kubectl') {
      steps {
        script {      
          //Installing kubectl in Jenkins agent
          sh 'curl -LO https://storage.googleapis.com/kubernetes-release/release/$(curl -s https://storage.googleapis.com/kubernetes-release/release/stable.txt)/bin/linux/amd64/kubectl'
          //sh 'chmod +x ./kubectl && mv kubectl /usr/local/sbin'
          sh 'chmod +x ./kubectl'
          sh "echo $KUBECONFIG_DATA > configkube"
        }
      }
    }    
    stage('Production-k8s') {
      steps {
        script {
          sh './kubectl --kubeconfig ./k8s/configkube get services'
        }
      }
    }
  }
}