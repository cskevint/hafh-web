import { Question } from "../model/quiz";

interface QuestionBoxProps {
  question: Question;
  onOptionChange: Function;
}

function QuestionBox({ question, onOptionChange }: QuestionBoxProps) {
  return (
    <div
      className="rounded mb-4 py-1 px-4 bg-white question"
      style={{ display: "block" }}
    >
      <div className="my-3 lead fs-5">
        <strong>{question.title}</strong>
      </div>
      {question.options.map((option) => {
        const optionId = `${question.name}-${option.value}`;
        return (
          <div className="form-check mb-3" key={optionId}>
            <input
              className="form-check-input"
              id={optionId}
              type="radio"
              name={question.name}
              value={option.value}
              required={false}
              onChange={() => {
                onOptionChange(question.name, option.value);
              }}
            />
            <label className="form-check-label fs-5" htmlFor={optionId}>
              {option.text}
            </label>
          </div>
        );
      })}
    </div>
  );
}

export default QuestionBox;
