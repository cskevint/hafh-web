import { useState } from "react";
import { Quiz } from "./quiz";
import QuestionBox from "./QuestionBox";

interface QuizFormProps {
  quiz: Quiz;
}

function QuizForm({ quiz }: QuizFormProps) {
  const [currentIndex, setCurrentIndex] = useState(0);
  const [quizSubmitted, setQuizSubmitted] = useState(false);
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
  };

  const submitQuiz = () => {
    setQuizSubmitted(true);
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

  return (
    <>
      <h1>Take a quiz to see if dog boarding is right for you</h1>
      <div style={{ display: !quizSubmitted ? "none" : "block" }}>
        {quizResult}
      </div>
      <div
        className="card"
        style={{ display: quizSubmitted ? "none" : "block" }}
      >
        <div className="card-body">
          <QuestionBox
            question={quiz.questions[currentIndex]}
            onOptionChange={changeQuestionOption}
          />
          <div className="row">
            <div className="col d-flex justify-content-between">
              <button
                className="btn btn-secondary"
                onClick={() => {
                  navigateQuestion(-1);
                }}
                disabled={currentIndex === 0}
              >
                Previous
              </button>
              <button
                className="btn btn-primary"
                style={{
                  display:
                    currentIndex === quiz.questions?.length - 1
                      ? "none"
                      : "inline",
                }}
                onClick={() => {
                  navigateQuestion(1);
                }}
                disabled={currentIndex === quiz.questions?.length - 1}
              >
                Next
              </button>
              <button
                className="btn btn-primary"
                style={{
                  display:
                    currentIndex !== quiz.questions?.length - 1
                      ? "none"
                      : "inline",
                }}
                onClick={() => {
                  submitQuiz();
                }}
              >
                Submit
              </button>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default QuizForm;
