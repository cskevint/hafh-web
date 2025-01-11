import { useState } from "react";
import { Quiz } from "../model/quiz";
import QuestionBox from "./QuestionBox";

interface QuizFormProps {
  quiz: Quiz;
}

function QuizForm({ quiz }: QuizFormProps) {
  const [currentIndex, setCurrentIndex] = useState(0);
  const [answerData, setAnswerData] = useState(new Map<string, number>());
  const [quizResult, setQuizResult] = useState("");

  const navigateQuestion = (delta: number) => {
    const index = currentIndex + delta;
    if (index >= 0 && index < quiz.questions.length) {
      setCurrentIndex(index);
    }
  };

  const changeQuestionOption = (name: string, value: number) => {
    answerData.set(name, value);
    setAnswerData(answerData);
    if (currentIndex === quiz.questions.length - 1) {
      submitQuiz();
    } else {
      navigateQuestion(1);
    }
  };

  const submitQuiz = () => {
    let score = 0;
    answerData.forEach((value) => {
      score += value;
    });
    if (score > 10) {
      setQuizResult("Match!");
    } else if (score > 5) {
      setQuizResult("Something to consider");
    } else {
      setQuizResult("Maybe not");
    }
  };

  const startOver = () => {
    setAnswerData(new Map<string, number>());
    setCurrentIndex(0);
  };

  function quizSubmitted(): boolean {
    let totalQuestions = quiz.questions.length;
    answerData.forEach(() => {
      totalQuestions--;
    });
    return totalQuestions === 0;
  }

  return (
    <>
      <h1>Take a quiz to see if dog boarding is right for you</h1>
      <div className="card">
        <div className="card-body">
          <div style={{ display: !quizSubmitted() ? "none" : "block" }}>
            <p>{quizResult}</p>
            <button className="btn btn-primary" onClick={startOver}>
              Start over
            </button>
          </div>
          <div style={{ display: quizSubmitted() ? "none" : "block" }}>
            <QuestionBox
              question={quiz.questions[currentIndex]}
              onOptionChange={changeQuestionOption}
            />
          </div>
        </div>
      </div>
    </>
  );
}

export default QuizForm;
