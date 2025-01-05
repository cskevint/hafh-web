import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import "vite/modulepreload-polyfill";
import QuizForm from "./components/QuizForm";
import { QuizData } from "./model/quiz";

createRoot(document.getElementById("root")!).render(
  <StrictMode>
    <QuizForm quiz={QuizData} />
  </StrictMode>
);
