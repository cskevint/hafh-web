import { useState } from "react";
import {
  Quiz,
  QuestionKey,
  AnswerValue,
  scoreQuizAnswers,
} from "../model/quiz";
import QuestionBox from "./QuestionBox";
import ResultsBox from "./ResultsBox";

interface QuizFormProps {
  quiz: Quiz;
}

function QuizForm({ quiz }: QuizFormProps) {
  const [currentIndex, setCurrentIndex] = useState(0);
  const [answerData, setAnswerData] = useState(
    new Map<QuestionKey, AnswerValue>()
  );
  const [quizResult, setQuizResult] = useState("");

  /**
   * Question navigation handler.
   * @param delta Number of questions to move forward or backward.
   */
  function navigateQuestion(delta: number): void {
    const index = currentIndex + delta;
    if (index >= 0 && index < quiz.questions.length) {
      setCurrentIndex(index);
    }
  }

  /**
   * Answer option selection handler, which submits the form after the last question.
   * @param name Question name key.
   * @param value Question answer value.
   */
  function changeQuestionOption(name: QuestionKey, value: AnswerValue) {
    setTimeout(() => {
      navigateQuestion(1);
      answerData.set(name, value);
      setAnswerData(answerData);
      setQuizResult(scoreQuizAnswers(quiz, answerData));
    }, 500);
  }

  /**
   * Resets the quiz back to the beginning.
   */
  function startOver(): void {
    setCurrentIndex(0);
    setAnswerData(new Map<QuestionKey, AnswerValue>());
    setQuizResult("");
  }

  return (
    <>
      <h1 className="mb-4">
        Take a quiz to see if dog boarding is right for you:
      </h1>
      <div className="card">
        {quizResult && (
          <div className="card-body">
            <div className="rounded mb-4 py-1 px-4 bg-white">
              <ResultsBox result={quizResult}/>
              <div className="d-flex justify-content-center align-items-center">
                <button className="btn btn-primary" onClick={startOver}>
                  Start over
                </button>
              </div>
            </div>
          </div>
        )}
        {!quizResult && (
          <div className="card-body">
            <QuestionBox
              question={quiz.questions[currentIndex]}
              answer={answerData.get(quiz.questions[currentIndex].name)}
              onOptionChange={changeQuestionOption}
            />
            <div className="d-flex justify-content-center align-items-center">
              <button
                className="btn btn-primary"
                onClick={() => navigateQuestion(-1)}
                style={{ display: currentIndex === 0 ? "none" : "block" }}
              >
                Back
              </button>
            </div>
          </div>
        )}
      </div>
    </>
  );
}

export default QuizForm;
