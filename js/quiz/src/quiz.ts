export interface Option {
  text: string;
  value: number;
}

export interface Question {
  title: string;
  name: string;
  options: Option[];
}

export interface Quiz {
  title: string;
  questions: Question[];
}

const QuizData: Quiz = {
  title: "Quiz",
  questions: [
    {
      title: "Do you own your own home?",
      name: "home",
      options: [
        {
          text: "Yes, I own my home.",
          value: 2,
        },
        {
          text: "No, I rent and my landlord is lenient.",
          value: 1,
        },
        {
          text: "No, I rent and have a strict landlord.",
          value: 0,
        },
      ],
    },
    {
      title: "Do you work from home or have a flexible job schedule?",
      name: "work",
      options: [
        {
          text: "Yes, I work from home or have a very flexible schedule.",
          value: 2,
        },
        {
          text: "I have a part-time job, which is quite flexible.",
          value: 1,
        },
        {
          text: "No, I work full-time with strict office hours.",
          value: 0,
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
          value: 2,
        },
        {
          text: "I'm relatively new but getting to know it better.",
          value: 1,
        },
        {
          text: "No, I just moved here or feel disconnected from my community.",
          value: 0,
        },
      ],
    },
    {
      title: "How long have you been a dog owner or worked with dogs?",
      name: "dog_experience",
      options: [
        {
          text: "Over 5 years.",
          value: 2,
        },
        {
          text: "1-5 years.",
          value: 1,
        },
        {
          text: "Less than a year.",
          value: 0,
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
          value: 2,
        },
        {
          text: "Yes, I have other pets, and I'm not sure how they'll react to more dogs.",
          value: 1,
        },
        {
          text: "No, I don't own any other pets.",
          value: 0,
        },
      ],
    },
    {
      title: "Are you interested in building a business from the ground up?",
      name: "business",
      options: [
        {
          text: "Yes, I am excited about starting and growing my own business.",
          value: 2,
        },
        {
          text: "I'm somewhat interested, but it seems daunting.",
          value: 1,
        },
        {
          text: "No, I prefer something with less commitment or that's already established.",
          value: 0,
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
          value: 2,
        },
        {
          text: "I've occasionally volunteered or helped friends with pet care.",
          value: 1,
        },
        {
          text: "No, I have no formal experience with pets.",
          value: 0,
        },
      ],
    },
  ],
};

export { QuizData };
