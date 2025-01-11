export type QuestionKey =
  | "home"
  | "work"
  | "community"
  | "dog_experience"
  | "dog_ability"
  | "business"
  | "pet_care";

export type AnswerValue =
  // home:
  | "own"
  | "rent-lenient"
  | "rent-strict"
  // work:
  | "work-from-home"
  | "flexible-hours"
  | "strict-hours"
  // community:
  | "integrated"
  | "new"
  | "disconnected"
  // dog_experience:
  | "5+"
  | "1-5"
  | "-1"
  // dog_ability:
  | "pets-good"
  | "pets-not-sure"
  | "no-pets"
  // business:
  | "excited"
  | "interested"
  | "less-commitment"
  // pet_care:
  | "professional"
  | "volunteered"
  | "no-experience";

export interface Option {
  text: string;
  value: AnswerValue;
}

export interface Question {
  title: string;
  name: QuestionKey;
  options: Option[];
}

export interface Quiz {
  title: string;
  questions: Question[];
}

export const QuizData: Quiz = {
  title: "Quiz",
  questions: [
    {
      title: "Do you own your own home?",
      name: "home",
      options: [
        {
          text: "Yes, I own my home.",
          value: "own",
        },
        {
          text: "No, I rent and my landlord is lenient.",
          value: "rent-lenient",
        },
        {
          text: "No, I rent and have a strict landlord.",
          value: "rent-strict",
        },
      ],
    },
    {
      title: "Do you work from home or have a flexible job schedule?",
      name: "work",
      options: [
        {
          text: "Yes, I work from home or have a very flexible schedule.",
          value: "work-from-home",
        },
        {
          text: "I have a part-time job, which is quite flexible.",
          value: "flexible-hours",
        },
        {
          text: "No, I work full-time with strict office hours.",
          value: "strict-hours",
        },
      ],
    },
    {
      title:
        "Do you have strong ties to your local area and understand the community dynamics?",
      name: "community",
      options: [
        {
          text: "Yes, I've lived here for years and am very integrated into the community.",
          value: "integrated",
        },
        {
          text: "I'm relatively new but getting to know it better.",
          value: "new",
        },
        {
          text: "No, I just moved here or feel disconnected from my community.",
          value: "disconnected",
        },
      ],
    },
    {
      title: "How long have you been a dog owner or worked with dogs?",
      name: "dog_experience",
      options: [
        {
          text: "Over 5 years.",
          value: "5+",
        },
        {
          text: "1-5 years.",
          value: "1-5",
        },
        {
          text: "Less than a year.",
          value: "-1",
        },
      ],
    },
    {
      title:
        "Do you own other pets that might influence your ability to host additional dogs?",
      name: "dog_ability",
      options: [
        {
          text: "Yes, I have other pets, but they are good with dogs.",
          value: "pets-good",
        },
        {
          text: "Yes, I have other pets, and I'm not sure how they'll react to more dogs.",
          value: "pets-not-sure",
        },
        {
          text: "No, I don't own any other pets.",
          value: "no-pets",
        },
      ],
    },
    {
      title: "Are you interested in building a business from the ground up?",
      name: "business",
      options: [
        {
          text: "Yes, I am excited about starting and growing my own business.",
          value: "excited",
        },
        {
          text: "I'm somewhat interested, but it seems daunting.",
          value: "interested",
        },
        {
          text: "No, I prefer something with less commitment or that's already established.",
          value: "less-commitment",
        },
      ],
    },
    {
      title:
        "Do you have any previous experience related to pet care or the pet industry?",
      name: "pet_care",
      options: [
        {
          text: "Yes, I have professional experience working with pets.",
          value: "professional",
        },
        {
          text: "I've occasionally volunteered or helped friends with pet care.",
          value: "volunteered",
        },
        {
          text: "No, I have no formal experience with pets.",
          value: "no-experience",
        },
      ],
    },
  ],
};

export type AnswerData = Map<QuestionKey, AnswerValue>;

export function scoreQuizAnswers(quiz: Quiz, answerData: AnswerData): string {
  if (answerData.size != quiz.questions.length) {
    return "";
  }
  if (
    answerData.get("home") == "rent-strict" ||
    answerData.get("work") == "strict-hours"
  ) {
    return "A home-based dog boarding may not be the right fit for you at this time.";
  } else if(answerData.get("pet_care") == "professional" || answerData.get("business") == "excited") {
    return "This is definitely for you! Take the course!";
  }
  return "Check this out!";
}
