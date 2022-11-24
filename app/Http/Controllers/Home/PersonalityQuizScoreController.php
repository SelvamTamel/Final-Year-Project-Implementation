<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\PersonalityQuizScore;
use Illuminate\Http\Request;

class PersonalityQuizScoreController extends Controller
{
    public function generate()
    {
       return view('home.quiz');
    }
    
    

    public function store(Request $request){

        # Validate Request
        $request->validate(
        [
            'question-1-answers'=>'required',
            'question-2-answers'=>'required',
            'question-3-answers'=>'required',
            'question-4-answers'=>'required',
            'question-5-answers'=>'required',
            'question-6-answers'=>'required',
            'question-7-answers'=>'required',
            'question-8-answers'=>'required',
            'question-9-answers'=>'required',
            'question-10-answers'=>'required',
            'question-11-answers'=>'required',
            'question-12-answers'=>'required',
            'question-13-answers'=>'required',
            'question-14-answers'=>'required',
            'question-15-answers'=>'required',
            'question-16-answers'=>'required',
            'question-17-answers'=>'required',
            'question-18-answers'=>'required',
            'question-19-answers'=>'required',
            'question-20-answers'=>'required',
            'question-21-answers'=>'required',
            'question-22-answers'=>'required',
            'question-23-answers'=>'required',
            'question-24-answers'=>'required',
            'question-25-answers'=>'required',
            'question-26-answers'=>'required',
            'question-27-answers'=>'required',
            'question-28-answers'=>'required',
            'question-29-answers'=>'required',
            'question-30-answers'=>'required',
            'question-31-answers'=>'required',
            'question-32-answers'=>'required',
            'question-33-answers'=>'required',
            'question-34-answers'=>'required',
            'question-35-answers'=>'required',
            'question-36-answers'=>'required',
            'question-37-answers'=>'required',
            'question-38-answers'=>'required',
            'question-39-answers'=>'required',
            'question-40-answers'=>'required',
            'question-41-answers'=>'required',
            'question-42-answers'=>'required',
            'question-43-answers'=>'required',
            'question-44-answers'=>'required',
            'question-45-answers'=>'required',
            'question-46-answers'=>'required',
            'question-47-answers'=>'required',
            'question-48-answers'=>'required',
            'question-49-answers'=>'required',
            'question-50-answers'=>'required'
        ]
    );

    if (!empty($request)) {

            # Gets user input
            $answer1 = $request->input('question-1-answers');
            $answer2 = $request->input('question-2-answers');
            $answer3 = $request->input('question-3-answers');
            $answer4 = $request->input('question-4-answers');
            $answer5 = $request->input('question-5-answers');
            $answer6 = $request->input('question-6-answers');
            $answer7 = $request->input('question-7-answers');
            $answer8 = $request->input('question-8-answers');
            $answer9 = $request->input('question-9-answers');
            $answer10 = $request->input('question-10-answers');

            $answer11 = $request->input('question-11-answers');
            $answer12 = $request->input('question-12-answers');
            $answer13 = $request->input('question-13-answers');
            $answer14 = $request->input('question-14-answers');
            $answer15 = $request->input('question-15-answers');
            $answer16 = $request->input('question-16-answers');
            $answer17 = $request->input('question-17-answers');
            $answer18 = $request->input('question-18-answers');
            $answer19 = $request->input('question-19-answers');
            $answer20 = $request->input('question-20-answers');

            $answer21 = $request->input('question-21-answers');
            $answer22 = $request->input('question-22-answers');
            $answer23 = $request->input('question-23-answers');
            $answer24 = $request->input('question-24-answers');
            $answer25 = $request->input('question-25-answers');
            $answer26 = $request->input('question-26-answers');
            $answer27 = $request->input('question-27-answers');
            $answer28 = $request->input('question-28-answers');
            $answer29 = $request->input('question-29-answers');
            $answer30 = $request->input('question-30-answers');
        
            $answer31 = $request->input('question-31-answers');
            $answer32 = $request->input('question-32-answers');
            $answer33 = $request->input('question-33-answers');
            $answer34 = $request->input('question-34-answers');
            $answer35 = $request->input('question-35-answers');
            $answer36 = $request->input('question-36-answers');
            $answer37 = $request->input('question-37-answers');
            $answer38 = $request->input('question-38-answers');
            $answer39 = $request->input('question-39-answers');
            $answer40 = $request->input('question-40-answers');
        
            $answer41 = $request->input('question-41-answers');
            $answer42 = $request->input('question-42-answers');
            $answer43 = $request->input('question-43-answers');
            $answer44 = $request->input('question-44-answers');
            $answer45 = $request->input('question-45-answers');
            $answer46 = $request->input('question-46-answers');
            $answer47 = $request->input('question-47-answers');
            $answer48 = $request->input('question-48-answers');
            $answer49 = $request->input('question-49-answers');
            $answer50 = $request->input('question-50-answers');
        
            $extraversionScore = 20;
            $agreeablenessScore = 14;
            $conscientiousnessScore = 14;
            $neuroticismScore = 38;
            $opennessScore = 8;

            # calculate total big five scoreing
            $totalextraversionScore =  20 + $answer1 - $answer6 + $answer11 - $answer16 + $answer21 - $answer26 + $answer31 - $answer36 + $answer41 - $answer46;
            $totalagreeablenessScore =  14 - $answer2 - $answer7 - $answer12 + $answer17 - $answer22 + $answer27 - $answer32 + $answer37  + $answer42 + $answer47;
            $totalconscientiousnessScore =  14 + $answer3 - $answer8 + $answer13 - $answer18 + $answer23 - $answer28 + $answer33 - $answer38 + $answer43 + $answer48;
            $totalneuroticismScore =  38 - $answer4 + $answer9 - $answer14 + $answer19 - $answer24 - $answer29 - $answer34 - $answer39 - $answer44 - $answer49;
            $totalopennessScore =  8 + $answer5 - $answer10 + $answer15 - $answer20 + $answer25 - $answer30 + $answer35 + $answer40 + $answer45 + $answer50;
        
                   
            # calculate percentage of big five score
            $extraversion = $totalextraversionScore / 50 * 100;
            $agreeableness = $totalagreeablenessScore  / 50 * 100;
            $conscientiousness = $totalconscientiousnessScore  / 50 * 100;
            $neuroticism = $totalneuroticismScore / 50 * 100;
            $openness = $totalopennessScore / 50 * 100;

            

            if ($answer1 == "1") 
            { 
                $extraversionScore + 1; 
            }
            else if ($answer1 == "2") 
            { 
                $extraversionScore + 2; 
            }
            else if ($answer1 == "3") 
            { 
                $extraversionScore + 3; 
            }
            else if ($answer1 == "4") 
            { 
                $extraversionScore + 4; 
            }
            else if ($answer1 == "5") 
            { 
                $extraversionScore + 5; 
            }
        
        
        
            if ($answer2 == "1") 
            { 
                $agreeablenessScore - 1; 
            }
            else if ($answer2 == "2") 
            { 
                $agreeablenessScore - 2; 
            }
            else if ($answer2 == "3") 
            { 
                $agreeablenessScore - 3; 
            }
            else if ($answer2 == "4") 
            { 
                $agreeablenessScore - 4; 
            }
            else if ($answer2 == "5") 
            { 
                $agreeablenessScore - 5; 
            }
            
        
            if ($answer3 == "1") 
            { 
                $conscientiousnessScore + 1; 
            }
            else if ($answer3 == "2") 
            { 
                $conscientiousnessScore + 2; 
            }
            else if ($answer3 == "3") 
            { 
                $conscientiousnessScore + 3; 
            }
            else if ($answer3 == "4") 
            { 
                $conscientiousnessScore + 4; 
            }
            else if ($answer3 == "5") 
            { 
                $conscientiousnessScore + 5; 
            }
        
            
            if ($answer4 == "1") 
            { 
                $neuroticismScore - 1; 
            }
            else if ($answer4 == "2") 
            { 
                $neuroticismScore - 2; 
            }
            else if ($answer4 == "3") 
            { 
                $neuroticismScore - 3; 
            }
            else if ($answer4 == "4") 
            { 
                $neuroticismScore - 4; 
            }
            else if ($answer4 == "5") 
            { 
                $neuroticismScore - 5; 
            }
        
        
            if ($answer5 == "1") 
            { 
                $opennessScore + 1; 
            }
            else if ($answer5 == "2") 
            { 
                $opennessScore + 2; 
            }
            else if ($answer5 == "3") 
            { 
                $opennessScore + 3; 
            }
            else if ($answer5 == "4") 
            { 
                $opennessScore + 4; 
            }
            else if ($answer5 == "5") 
            { 
                $opennessScore + 5; 
            }
        
            
            if ($answer6 == "1") 
            { 
                $extraversionScore - 1; 
            }
            else if ($answer6 == "2") 
            { 
                $extraversionScore - 2; 
            }
            else if ($answer6 == "3") 
            { 
                $extraversionScore - 3; 
            }
            else if ($answer6 == "4") 
            { 
                $extraversionScore - 4; 
            }
            else if ($answer6 == "5") 
            { 
                $extraversionScore - 5; 
            }
        
        
        
            if ($answer7 == "1") 
            { 
                $agreeablenessScore + 1; 
            }
            else if ($answer7 == "2") 
            { 
                $agreeablenessScore + 2; 
            }
            else if ($answer7 == "3") 
            { 
                $agreeablenessScore + 3; 
            }
            else if ($answer7 == "4") 
            { 
                $agreeablenessScore + 4; 
            }
            else if ($answer7 == "5") 
            { 
                $agreeablenessScore + 5; 
            }
        
        
            if ($answer8 == "1") 
            { 
                $conscientiousnessScore - 1; 
            }
            else if ($answer8 == "2") 
            { 
                $conscientiousnessScore - 2; 
            }
            else if ($answer8 == "3") 
            { 
                $conscientiousnessScore - 3; 
            }
            else if ($answer8 == "4") 
            { 
                $conscientiousnessScore - 4; 
            }
            else if ($answer8 == "5") 
            { 
                $conscientiousnessScore - 5; 
            }
        
        
            if ($answer9 == "1") 
            { 
                $neuroticismScore + 1; 
            }
            else if ($answer9 == "2") 
            { 
                $neuroticismScore + 2; 
            }
            else if ($answer9 == "3") 
            { 
                $neuroticismScore + 3; 
            }
            else if ($answer9 == "4") 
            { 
                $neuroticismScore + 4; 
            }
            else if ($answer9 == "5") 
            { 
                $neuroticismScore + 5; 
            }
        
        
        
            if ($answer10 == "1") 
            { 
                $opennessScore - 1; 
            }
            else if ($answer10 == "2") 
            { 
                $opennessScore - 2; 
            }
            else if ($answer10 == "3") 
            { 
                $opennessScore - 3; 
            }
            else if ($answer10 == "4") 
            { 
                $opennessScore - 4; 
            }
            else if ($answer10 == "5") 
            { 
                $opennessScore - 5; 
            }
        
        
            if ($answer11 == "1") 
            { 
                $extraversionScore + 1; 
            }
            else if ($answer11 == "2") 
            { 
                $extraversionScore + 2; 
            }
            else if ($answer11 == "3") 
            { 
                $extraversionScore + 3; 
            }
            else if ($answer11 == "4") 
            { 
                $extraversionScore + 4; 
            }
            else if ($answer11 == "5") 
            { 
                $extraversionScore + 5; 
            }
        
            if ($answer12 == "1") 
            { 
                $agreeablenessScore - 1; 
            }
            else if ($answer12 == "2") 
            { 
                $agreeablenessScore - 2; 
            }
            else if ($answer12 == "3") 
            { 
                $agreeablenessScore - 3; 
            }
            else if ($answer12 == "4") 
            { 
                $agreeablenessScore - 4; 
            }
            else if ($answer12 == "5") 
            { 
                $agreeablenessScore - 5; 
            }
        
            if ($answer13 == "1") 
            { 
                $conscientiousnessScore + 1; 
            }
            else if ($answer13 == "2") 
            { 
                $conscientiousnessScore + 2; 
            }
            else if ($answer13 == "3") 
            { 
                $conscientiousnessScore + 3; 
            }
            else if ($answer13 == "4") 
            { 
                $conscientiousnessScore + 4; 
            }
            else if ($answer13 == "5") 
            { 
                $conscientiousnessScore + 5; 
            }
        
            if ($answer14 == "1") 
            { 
                $neuroticismScore - 1; 
            }
            else if ($answer14 == "2") 
            { 
                $neuroticismScore - 2; 
            }
            else if ($answer14 == "3") 
            { 
                $neuroticismScore - 3; 
            }
            else if ($answer14 == "4") 
            { 
                $neuroticismScore - 4; 
            }
            else if ($answer14 == "5") 
            { 
                $neuroticismScore - 5; 
            }
        
            if ($answer15 == "1") 
            { 
                $opennessScore + 1; 
            }
            else if ($answer15 == "2") 
            { 
                $opennessScore + 2; 
            }
            else if ($answer15 == "3") 
            { 
                $opennessScore + 3; 
            }
            else if ($answer15 == "4") 
            { 
                $opennessScore + 4; 
            }
            else if ($answer15 == "5") 
            { 
                $opennessScore + 5; 
            }
            
           
            if ($answer16 == "1") 
            { 
                $extraversionScore - 1; 
            }
            else if ($answer16 == "2") 
            { 
                $extraversionScore - 2; 
            }
            else if ($answer16 == "3") 
            { 
                $extraversionScore - 3; 
            }
            else if ($answer16 == "4") 
            { 
                $extraversionScore - 4; 
            }
            else if ($answer16 == "5") 
            { 
                $extraversionScore - 5; 
            }
        
        
        
            if ($answer17 == "1") 
            { 
                $agreeablenessScore + 1; 
            }
            else if ($answer17 == "2") 
            { 
                $agreeablenessScore + 2; 
            }
            else if ($answer17 == "3") 
            { 
                $agreeablenessScore + 3; 
            }
            else if ($answer17 == "4") 
            { 
                $agreeablenessScore + 4; 
            }
            else if ($answer17 == "5") 
            { 
                $agreeablenessScore + 5; 
            }
        
        
            if ($answer18 == "1") 
            { 
                $conscientiousnessScore - 1; 
            }
            else if ($answer18 == "2") 
            { 
                $conscientiousnessScore - 2; 
            }
            else if ($answer18 == "3") 
            { 
                $conscientiousnessScore - 3; 
            }
            else if ($answer18 == "4") 
            { 
                $conscientiousnessScore - 4; 
            }
            else if ($answer18 == "5") 
            { 
                $conscientiousnessScore - 5; 
            }
        
        
            if ($answer19 == "1") 
            { 
                $neuroticismScore + 1; 
            }
            else if ($answer19 == "2") 
            { 
                $neuroticismScore + 2; 
            }
            else if ($answer19 == "3") 
            { 
                $neuroticismScore + 3; 
            }
            else if ($answer19 == "4") 
            { 
                $neuroticismScore + 4; 
            }
            else if ($answer19 == "5") 
            { 
                $neuroticismScore + 5; 
            }
        
        
        
            if ($answer20 == "1") 
            { 
                $opennessScore - 1; 
            }
            else if ($answer20 == "2") 
            { 
                $opennessScore - 2; 
            }
            else if ($answer20 == "3") 
            { 
                $opennessScore - 3; 
            }
            else if ($answer20 == "4") 
            { 
                $opennessScore - 4; 
            }
            else if ($answer20 == "5") 
            { 
                $opennessScore - 5; 
            }
        
        
            if ($answer21 == "1") 
            { 
                $extraversionScore + 1; 
            }
            else if ($answer21 == "2") 
            { 
                $extraversionScore + 2; 
            }
            else if ($answer21 == "3") 
            { 
                $extraversionScore + 3; 
            }
            else if ($answer21 == "4") 
            { 
                $extraversionScore + 4; 
            }
            else if ($answer21 == "5") 
            { 
                $extraversionScore + 5; 
            }
        
        
        
            if ($answer22 == "1") 
            { 
                $agreeablenessScore - 1; 
            }
            else if ($answer22 == "2") 
            { 
                $agreeablenessScore - 2; 
            }
            else if ($answer22 == "3") 
            { 
                $agreeablenessScore - 3; 
            }
            else if ($answer22 == "4") 
            { 
                $agreeablenessScore - 4; 
            }
            else if ($answer22 == "5") 
            { 
                $agreeablenessScore - 5; 
            }
            
        
            if ($answer23 == "1") 
            { 
                $conscientiousnessScore + 1; 
            }
            else if ($answer23 == "2") 
            { 
                $conscientiousnessScore + 2; 
            }
            else if ($answer23 == "3") 
            { 
                $conscientiousnessScore + 3; 
            }
            else if ($answer23 == "4") 
            { 
                $conscientiousnessScore + 4; 
            }
            else if ($answer23 == "5") 
            { 
                $conscientiousnessScore + 5; 
            }
        
            
            if ($answer24 == "1") 
            { 
                $neuroticismScore - 1; 
            }
            else if ($answer24 == "2") 
            { 
                $neuroticismScore - 2; 
            }
            else if ($answer24 == "3") 
            { 
                $neuroticismScore - 3; 
            }
            else if ($answer24 == "4") 
            { 
                $neuroticismScore - 4; 
            }
            else if ($answer24 == "5") 
            { 
                $neuroticismScore - 5; 
            }
        
        
            if ($answer25 == "1") 
            { 
                $opennessScore + 1; 
            }
            else if ($answer25 == "2") 
            { 
                $opennessScore + 2; 
            }
            else if ($answer25 == "3") 
            { 
                $opennessScore + 3; 
            }
            else if ($answer25 == "4") 
            { 
                $opennessScore + 4; 
            }
            else if ($answer25 == "5") 
            { 
                $opennessScore + 5; 
            }
        
            if ($answer26 == "1") 
            { 
                $extraversionScore - 1; 
            }
            else if ($answer26 == "2") 
            { 
                $extraversionScore - 2; 
            }
            else if ($answer26 == "3") 
            { 
                $extraversionScore - 3; 
            }
            else if ($answer26 == "4") 
            { 
                $extraversionScore - 4; 
            }
            else if ($answer26 == "5") 
            { 
                $extraversionScore - 5; 
            }
        
        
        
            if ($answer27 == "1") 
            { 
                $agreeablenessScore + 1; 
            }
            else if ($answer27 == "2") 
            { 
                $agreeablenessScore + 2; 
            }
            else if ($answer27 == "3") 
            { 
                $agreeablenessScore + 3; 
            }
            else if ($answer27 == "4") 
            { 
                $agreeablenessScore + 4; 
            }
            else if ($answer27 == "5") 
            { 
                $agreeablenessScore + 5; 
            }
        
        
            if ($answer28 == "1") 
            { 
                $conscientiousnessScore - 1; 
            }
            else if ($answer28 == "2") 
            { 
                $conscientiousnessScore - 2; 
            }
            else if ($answer28 == "3") 
            { 
                $conscientiousnessScore - 3; 
            }
            else if ($answer28 == "4") 
            { 
                $conscientiousnessScore - 4; 
            }
            else if ($answer28 == "5") 
            { 
                $conscientiousnessScore - 5; 
            }
        
        
            if ($answer29 == "1") 
            { 
                $neuroticismScore - 1; 
            }
            else if ($answer29 == "2") 
            { 
                $neuroticismScore - 2; 
            }
            else if ($answer29 == "3") 
            { 
                $neuroticismScore - 3; 
            }
            else if ($answer29 == "4") 
            { 
                $neuroticismScore - 4; 
            }
            else if ($answer29 == "5") 
            { 
                $neuroticismScore - 5; 
            }
        
        
        
            if ($answer30 == "1") 
            { 
                $opennessScore - 1; 
            }
            else if ($answer30 == "2") 
            { 
                $opennessScore - 2; 
            }
            else if ($answer30 == "3") 
            { 
                $opennessScore - 3; 
            }
            else if ($answer30 == "4") 
            { 
                $opennessScore - 4; 
            }
            else if ($answer30 == "5") 
            { 
                $opennessScore - 5; 
            }
        
            if ($answer31 == "1") 
            { 
                $extraversionScore + 1; 
            }
            else if ($answer31 == "2") 
            { 
                $extraversionScore + 2; 
            }
            else if ($answer31 == "3") 
            { 
                $extraversionScore + 3; 
            }
            else if ($answer31 == "4") 
            { 
                $extraversionScore + 4; 
            }
            else if ($answer31 == "5") 
            { 
                $extraversionScore + 5; 
            }
        
        
        
            if ($answer32 == "1") 
            { 
                $agreeablenessScore - 1; 
            }
            else if ($answer32 == "2") 
            { 
                $agreeablenessScore - 2; 
            }
            else if ($answer32 == "3") 
            { 
                $agreeablenessScore - 3; 
            }
            else if ($answer32 == "4") 
            { 
                $agreeablenessScore - 4; 
            }
            else if ($answer32 == "5") 
            { 
                $agreeablenessScore - 5; 
            }
            
        
            if ($answer33 == "1") 
            { 
                $conscientiousnessScore + 1; 
            }
            else if ($answer33 == "2") 
            { 
                $conscientiousnessScore + 2; 
            }
            else if ($answer33 == "3") 
            { 
                $conscientiousnessScore + 3; 
            }
            else if ($answer33 == "4") 
            { 
                $conscientiousnessScore + 4; 
            }
            else if ($answer33 == "5") 
            { 
                $conscientiousnessScore + 5; 
            }
        
            
            if ($answer34 == "1") 
            { 
                $neuroticismScore - 1; 
            }
            else if ($answer34 == "2") 
            { 
                $neuroticismScore - 2; 
            }
            else if ($answer34 == "3") 
            { 
                $neuroticismScore - 3; 
            }
            else if ($answer34 == "4") 
            { 
                $neuroticismScore - 4; 
            }
            else if ($answer34 == "5") 
            { 
                $neuroticismScore - 5; 
            }
        
        
            if ($answer35 == "1") 
            { 
                $opennessScore + 1; 
            }
            else if ($answer35 == "2") 
            { 
                $opennessScore + 2; 
            }
            else if ($answer35 == "3") 
            { 
                $opennessScore + 3; 
            }
            else if ($answer35 == "4") 
            { 
                $opennessScore + 4; 
            }
            else if ($answer35 == "5") 
            { 
                $opennessScore + 5; 
            }
        
            
            if ($answer36 == "1") 
            { 
                $extraversionScore - 1; 
            }
            else if ($answer36 == "2") 
            { 
                $extraversionScore - 2; 
            }
            else if ($answer36 == "3") 
            { 
                $extraversionScore - 3; 
            }
            else if ($answer36 == "4") 
            { 
                $extraversionScore - 4; 
            }
            else if ($answer36 == "5") 
            { 
                $extraversionScore - 5; 
            }
        
        
        
            if ($answer37 == "1") 
            { 
                $agreeablenessScore + 1; 
            }
            else if ($answer37 == "2") 
            { 
                $agreeablenessScore + 2; 
            }
            else if ($answer37 == "3") 
            { 
                $agreeablenessScore + 3; 
            }
            else if ($answer37 == "4") 
            { 
                $agreeablenessScore + 4; 
            }
            else if ($answer37 == "5") 
            { 
                $agreeablenessScore + 5; 
            }
        
        
            if ($answer38 == "1") 
            { 
                $conscientiousnessScore - 1; 
            }
            else if ($answer38 == "2") 
            { 
                $conscientiousnessScore - 2; 
            }
            else if ($answer38 == "3") 
            { 
                $conscientiousnessScore - 3; 
            }
            else if ($answer38 == "4") 
            { 
                $conscientiousnessScore - 4; 
            }
            else if ($answer38 == "5") 
            { 
                $conscientiousnessScore - 5; 
            }
        
        
            if ($answer39 == "1") 
            { 
                $neuroticismScore - 1; 
            }
            else if ($answer39 == "2") 
            { 
                $neuroticismScore - 2; 
            }
            else if ($answer39 == "3") 
            { 
                $neuroticismScore - 3; 
            }
            else if ($answer39 == "4") 
            { 
                $neuroticismScore - 4; 
            }
            else if ($answer39 == "5") 
            { 
                $neuroticismScore - 5; 
            }
        
        
        
            if ($answer40 == "1") 
            { 
                $opennessScore + 1; 
            }
            else if ($answer40 == "2") 
            { 
                $opennessScore + 2; 
            }
            else if ($answer40 == "3") 
            { 
                $opennessScore + 3; 
            }
            else if ($answer40 == "4") 
            { 
                $opennessScore + 4; 
            }
            else if ($answer40 == "5") 
            { 
                $opennessScore + 5; 
            }
        
            if ($answer41 == "1") 
            { 
                $extraversionScore + 1; 
            }
            else if ($answer41 == "2") 
            { 
                $extraversionScore + 2; 
            }
            else if ($answer41 == "3") 
            { 
                $extraversionScore + 3; 
            }
            else if ($answer41 == "4") 
            { 
                $extraversionScore + 4; 
            }
            else if ($answer41 == "5") 
            { 
                $extraversionScore + 5; 
            }
        
        
        
            if ($answer42 == "1") 
            { 
                $agreeablenessScore + 1; 
            }
            else if ($answer42 == "2") 
            { 
                $agreeablenessScore + 2; 
            }
            else if ($answer42 == "3") 
            { 
                $agreeablenessScore + 3; 
            }
            else if ($answer42 == "4") 
            { 
                $agreeablenessScore + 4; 
            }
            else if ($answer42 == "5") 
            { 
                $agreeablenessScore + 5; 
            }
            
        
            if ($answer43 == "1") 
            { 
                $conscientiousnessScore + 1; 
            }
            else if ($answer43 == "2") 
            { 
                $conscientiousnessScore + 2; 
            }
            else if ($answer43 == "3") 
            { 
                $conscientiousnessScore + 3; 
            }
            else if ($answer43 == "4") 
            { 
                $conscientiousnessScore + 4; 
            }
            else if ($answer43 == "5") 
            { 
                $conscientiousnessScore + 5; 
            }
        
            
            if ($answer44 == "1") 
            { 
                $neuroticismScore - 1; 
            }
            else if ($answer44 == "2") 
            { 
                $neuroticismScore - 2; 
            }
            else if ($answer44 == "3") 
            { 
                $neuroticismScore - 3; 
            }
            else if ($answer44 == "4") 
            { 
                $neuroticismScore - 4; 
            }
            else if ($answer44 == "5") 
            { 
                $neuroticismScore - 5; 
            }
        
        
            if ($answer45 == "1") 
            { 
                $opennessScore + 1; 
            }
            else if ($answer45 == "2") 
            { 
                $opennessScore + 2; 
            }
            else if ($answer45 == "3") 
            { 
                $opennessScore + 3; 
            }
            else if ($answer45 == "4") 
            { 
                $opennessScore + 4; 
            }
            else if ($answer45 == "5") 
            { 
                $opennessScore + 5; 
            }
        
            if ($answer46 == "1") 
            { 
                $extraversionScore - 1; 
            }
            else if ($answer46 == "2") 
            { 
                $extraversionScore - 2; 
            }
            else if ($answer46 == "3") 
            { 
                $extraversionScore - 3; 
            }
            else if ($answer46 == "4") 
            { 
                $extraversionScore - 4; 
            }
            else if ($answer46 == "5") 
            { 
                $extraversionScore - 5; 
            }
        
        
        
            if ($answer47 == "1") 
            { 
                $agreeablenessScore + 1; 
            }
            else if ($answer47 == "2") 
            { 
                $agreeablenessScore + 2; 
            }
            else if ($answer47 == "3") 
            { 
                $agreeablenessScore + 3; 
            }
            else if ($answer47 == "4") 
            { 
                $agreeablenessScore + 4; 
            }
            else if ($answer47 == "5") 
            { 
                $agreeablenessScore + 5; 
            }
        
        
            if ($answer48 == "1") 
            { 
                $conscientiousnessScore + 1; 
            }
            else if ($answer48 == "2") 
            { 
                $conscientiousnessScore + 2; 
            }
            else if ($answer48 == "3") 
            { 
                $conscientiousnessScore + 3; 
            }
            else if ($answer48 == "4") 
            { 
                $conscientiousnessScore + 4; 
            }
            else if ($answer48 == "5") 
            { 
                $conscientiousnessScore + 5; 
            }
        
        
            if ($answer49 == "1") 
            { 
                $neuroticismScore - 1; 
            }
            else if ($answer49 == "2") 
            { 
                $neuroticismScore - 2; 
            }
            else if ($answer49 == "3") 
            { 
                $neuroticismScore - 3; 
            }
            else if ($answer49 == "4") 
            { 
                $neuroticismScore - 4; 
            }
            else if ($answer49 == "5") 
            { 
                $neuroticismScore - 5; 
            }
        
        
            if ($answer50 == "1") 
            { 
                $opennessScore + 1; 
            }
            else if ($answer50 == "2") 
            { 
                $opennessScore + 2; 
            }
            else if ($answer50 == "3") 
            { 
                $opennessScore + 3; 
            }
            else if ($answer50 == "4") 
            { 
                $opennessScore + 4; 
            }
            else if ($answer50 == "5") 
            { 
                $opennessScore + 5; 
            }

            $personalityquizresult = new PersonalityQuizScore;
            $personalityquizresult->extraversion = $extraversion;
            $personalityquizresult->agreeableness = $agreeableness;
            $personalityquizresult->conscientiousness = $conscientiousness;
            $personalityquizresult->neuroticism = $neuroticism;
            $personalityquizresult->openness = $openness;

            # Store user info into mysql database
            $personalityquizresult->save();

             # redirect quiz result page
            return redirect()->route('quizresult', $personalityquizresult->id);
     
        
        }

           
    }

    public function view($id){

        $personalitypct = PersonalityQuizScore::find($id);

        return view ('home.quizresult', compact('personalitypct', 'id'));

        }


}

