import { useState, useEffect } from "react";
import QuizData from './quiz';

function Quiz({ quiz }) {
  const [currentIndex, setCurrentIndex] = useState(0);
  const [quizSubmitted, setQuizSubmitted] = useState(false);
  const [answerData, setAnswerData] = useState({});
  const [quizResult, setQuizResult] = useState("");

  const navigateQuestion = (delta) => {
    const index = currentIndex + delta;
    if (index >= 0 && index < quiz.questions.length) {
      setCurrentIndex(index);
    }
  };

  const submitQuiz = () => {
    setQuizSubmitted(true);
    if (Object.values(answerData).length === 0) {
      setQuizResult("Maybe not");
      return;
    }
    const score = Object.values(answerData).reduce((a,b) => { return a + b;});
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
        <Question
          question={quiz.questions?.at(currentIndex) ?? {}}
          onOptionChange={(name, value) => {
            setAnswerData({
              ...answerData,
              [name]: value,
            });
          }}
        />
        <div className="navigation">
          <button
            onClick={() => {
              navigateQuestion(-1);
            }}
            disabled={currentIndex === 0}
          >
            Previous
          </button>
          <button
            style={{
              display:
                currentIndex === quiz.questions?.length - 1 ? "none" : "inline",
            }}
            onClick={() => {
              navigateQuestion(1);
            }}
            disabled={currentIndex === quiz.questions?.length - 1}
          >
            Next
          </button>
          <button
            style={{
              display:
                currentIndex !== quiz.questions?.length - 1 ? "none" : "inline",
            }}
            onClick={() => {
              submitQuiz();
            }}
          >
            Submit
          </button>
        </div>
      </div>
    </>
  );
}

function Question({ question, onOptionChange }) {
  return (
    <div
      className="rounded mb-4 py-1 px-4 bg-white question"
      style={{ display: "block" }}
    >
      <div className="my-3 lead">
        <strong>{question.title}</strong>
      </div>
      {question.options?.map((option, j) => {
        const optionId = `${question.name}-${option.value}`;
        return (
          <div className="form-check mb-3" key={optionId}>
            <input
              className="form-check-input"
              id={optionId}
              type="radio"
              name={question.name}
              value={option.value}
              required=""
              onChange={() => {
                onOptionChange(question.name, option.value);
              }}
            />
            <label className="form-check-label" htmlFor={optionId}>
              {option.text}
            </label>
          </div>
        );
      })}
    </div>
  );
}

function App() {
  return <Quiz quiz={QuizData} />;
}

export default App;
