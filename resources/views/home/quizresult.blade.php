<html>
    <head>
  
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui">
      
        <title>CyberPersona - CyberSecurity Personality Quiz</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
  
       <!-- Favicons -->
       <link href="{{ asset('assets/images/head-Icon.ico') }}" rel="icon">
  
       <!-- Template Main CSS File -->
       <link href="{{ asset('assets/css/tailwind.css') }}" rel="stylesheet">
  
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          
  
  </head>

  <body>

    <div>
  
        <header class="bg-blue-500 h-12 flex items-center">
        <div class="font-sans text-white font-semibold px-5">
          CyberPersona
        </div>
        </header>
        <div class="bg-blue-400 h-64 shape text-blue-50 flex items-center justify-center flex-col">
          <h1 class="relative -top-4 text-3xl md:text-5xl m-2 md:pr-20">
            Cybersecurity Personality Quiz
          </h1>
          <h2 class="relative -top-4 text-lg md:text-xl md:pl-20">
          bigfivetraits
          </h2>
        </div>
  
      <br>
      <br>

      <div class="container">
        <h3 class="pb-5 text-center">
        Your overall score based on the 5 personality traits is as follow:
        </h3>
        </div>


        <div class="container">
            <div class="col-lg-11">

            <!-- Show Graph Data -->
            <script src="https://cdnjs.com/libraries/Chart.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
              
            <canvas id="myBarChart" width="auto" height="100"></canvas>
            </div>
            <script>
            var ctx = document.getElementById('myBarChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Extraversion", "Agreeableness", "Conscientiousness", "Neuroticism", "Openness"],
                    datasets: [{
                        label: '',
                        data: ["{{$personalitypct['extraversion']}}", "{{$personalitypct['agreeableness']}}", "{{$personalitypct['conscientiousness']}}", "{{$personalitypct['neuroticism']}}", "{{$personalitypct['openness']}}"],
                        backgroundColor: [
                            '#343a40',
                            '#17a2b8',
                            '#28a745',
                            '#dc3545',
                            '#007bff',
                        ],
                        borderColor: [
                          '#343a40',
                            '#17a2b8',
                            '#28a745',
                            '#dc3545',
                            '#007bff',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            max: 100,
                            min: 0,
                            ticks: {
                                stepSize: 15
                            }
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'CyberPersona Quiz Result'
                        },
                        legend: {
                            display: false,
                        }
                    }
                }
            });
            </script>

  <br>
  <br>

          {{-- Display the result in percentage & description of the cyberhreats based on personality  --}}
              <div class="container">
              <div class="accordion" id="accordionExample">
                <div class="card">
                <div class="card-header bg-dark " id="headingOne">
                <h5 class="mb-0">
                <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Extraversion <span>({{$personalitypct['extraversion']}}%)</span> 
                </button>
                </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                <strong>Characteristics of Extraversion trait to the cyber world </strong> <br>
                <li>Complies with security training and procedures</li>
                <li>Installs software updates and secures devicese</li>
                <li>Diligent in securing and updating devices regularly</li>
                <li>Tends to speak out any security issues</li>
                <li>Encourage others to complete training</li>
                <li>Likely to be receptive to training that highlights social aspects, game-like features and being able to share knowledge</li>
                <br> <strong>Vulnerable of Extraversion </strong> <br>
                <li>Less concerned about privacy</li>
                <li>High social activity can lead to disclosure of sensitive, personal information</li>
                <li>Susceptible to phishing scams that offer rewards, deals or social recognition</li>
                </div>
                </div>
                </div>
            <div class="card">
            <div class="card-header bg-info" id="headingTwo">
              <h5 class="mb-0">
              <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Agreeableness <span>({{$personalitypct['agreeableness']}}%)</span> 
              </button>
              </h5>
              </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                  <strong>Characteristics of Agreeableness trait to the cyber world </strong> <br>
                  <li>Correlated with risky decisions</li>
                  <li>Have a high propensity to self-disclosure</li>
                  <li>Follows security policy</li>
                  <li>Takes information onboard around cyber security topics</li>
                  <li>Installs software updates</li>
                  <li>Spots phishing emails quickly</li>
                  <li>Reports security breaches diligently</li>
                  <li>Likely to be receptive to training that emphasises morals and when viewing training as common good</li>
                  <br> <strong>Vulnerable of Agreeableness </strong> <br>
                  <li>Cyber groomers </li>
                  <li>Phishing </li>
              </div>
              </div>
              </div>
                <div class="card">
                <div class="card-header bg-success" id="headingThree">
                <h5 class="mb-0">
                <button class="btn btn-link text-white" type="button" data-toggle
                ="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Conscientiousness <span>({{$personalitypct['conscientiousness']}}%)</span> 
                </button>
                </h5>
                </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <strong>Characteristics of Conscientiousness trait to the cyber world </strong> <br>
                    <li>Examines information</li>
                    <li>Concerned about privacy</li>
                    <li>Completes training</li>
                    <li>Quick to spot suspicious emails</li>
                    <li>Installs software updates</li>
                    <li>Uses password management strategies</li>
                    <li>Likely to be receptive to training following norms and rules</li>
                    <br> <strong>Vulnerable of Conscientiousness </strong> <br>
                    <li>When under pressure can be susceptible to phishing</li>
                    <li>Susceptible to spear-phishing where genuinelooking scams offer achievements or prizes</li>
                </div>
                </div>
                  <div class="card">
                  <div class="card-header bg-danger" id="headingFour">
                  <h5 class="mb-0">
                  <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Neuroticism <span>({{$personalitypct['neuroticism']}}%)</span> 
                  </button>
                  </h5>
                  </div>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                    <strong>Characteristics of Neuroticism trait to the cyber world </strong> <br>
                    <li>Focus on minimising risks</li>
                    <li>Concerned about privacy </li>
                    <li>Lower trust on others can act as a safeguard</li>
                    <li>Fewer online interactions</li>
                    <li>Likely to be receptive to training showing how to lessen the worry and anxiety</li>
                    <br> <strong>Vulnerable of Neuroticism </strong> <br>
                    <li>Under pressure and in situations triggering anxiety can make hasty judgements especially when faced with persuasive or urgent phishing attempts</li>
                    <li>Colleagues’ views can influence whether security training is completed. Less likely to complete if talked about as an unnecessary task</li>
                  </div>
                  </div>
                      </div>
                      <div class="card">
                      <div class="card-header bg-primary" id="headingFive">
                      <h5 class="mb-0">
                      <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Openness to Experience <span>({{$personalitypct['openness']}}%)</span> 
                      </button>
                      </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                      <strong>Characteristics of Openness to Experience trait to the cyber world </strong> <br>
                      <li>Fast and curious learner when it comes to cyber security topics</li>
                      <li>Spots phishing emails quickly</li>
                      <li>Tends to detect suspicious activity</li>
                      <li>Likely to be receptive to training offering variety of information and media types</li>
                      <br> <strong>Vulnerable of Openness </strong> <br>
                      <li>Less concerned about privacy </li>
                      <li>Likely to comply with the criminal’s demands if they seem genuine</li>
                      <li>Looking for the variety might find that the standard security training is not worth their time</li>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>


   <br>
   <br>
   

      <a href="{{ url('home') }}">
      <div class="col text-center">
      <input type="submit" class="btn btn-warning" value="Home" >
      </a> 
      </div>

  <br>

  
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
