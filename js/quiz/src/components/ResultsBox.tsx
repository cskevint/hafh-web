export default function ResultsBox({ result }: { result: string }) {
  const success = (
    <div>
      <h3>Congratulations!</h3>
      <p>
        You’re ready to turn your love for dogs into unlimited earnings!
        &#128062; &#128188;
      </p>
      <p>
        Your results show that you have what it takes to
        <b> start earning as much as you want</b> with your very own home-based
        dog-care business. &#127881;
      </p>
      <p>Why wait? This is your moment:</p>
      <ul>
        <li>
          &#128054; <b>You’re the perfect fit:</b> Passionate about dogs,
          curious, and ready to succeed.
        </li>
        <li>
          &#128176; <b>The sky’s the limit:</b> With the right strategies, you
          can transform this business into a stable and growing income stream.
        </li>
        <li>
          &#127969; <b>Work from home:</b> Turn your space into a cozy haven for
          your furry clients.
        </li>
      </ul>
      <p>
        With the <b>Hound Away From Home course</b>, you’ll learn not just how
        to care for dogs, but how to turn that passion into a profitable and
        scalable business.
      </p>
      <p>
        &#10024; <b>What’s in store for you?</b>
      </p>
      <ul>
        <li>Proven strategies to find clients easily.</li>
        <li>Tips for managing multiple dogs with confidence.</li>
        <li>Techniques to maximize your income from day one.</li>
      </ul>
      <p>
        <b>Ready to start earning?</b>
      </p>
      <p>
        <a href="/course" className="link-primary text-decoration-none">
          &#128073; Join the course now and get an exclusive discount for a
          limited time!
        </a>
      </p>
      <p>
        The time to build a business you love and control your income is
        <b> right now</b>. You’ve got this! &#128588; &#128062;
      </p>
    </div>
  );
  const consider = (
    <div>
      <h3>You’re Almost There!</h3>
      <p>Just one step away from being ready to succeed! &#128062; &#10024;</p>
      <p>
        Your results show that you’re so close to turning your love for dogs
        into a successful business. All you need now is a little extra
        guidance—and that’s exactly what we’ve prepared for you!
      </p>
      <p>
        <b>Take the Leap with Hound Away From Home:</b>
      </p>
      <p>
        In just <b>9 days</b>, this course will show you everything you need to
        know to feel confident, prepared, and ready to start earning while doing
        what you love.
      </p>
      <p>What You’ll Learn:</p>
      <ul>
        <li>&#128021; How to set up your home for dog boarding like a pro.</li>
        <li>
          &#128188; Business strategies to get your first clients and grow.
        </li>
        <li>
          &#128062; Dog behavior insights to make every stay safe and joyful.
        </li>
      </ul>
      <p>
        <b>This is the perfect time to take that final step</b> and turn your
        dream into a reality. With the tools, tips, and techniques you’ll gain
        in this course, you’ll feel ready to welcome your first clients and
        start building your dog-care business.
      </p>
      <p>
        Ready to start your journey?<b></b>
      </p>
      <p>
        <a href="/course" className="link-primary text-decoration-none">
          &#128073; Join now and transform your passion into a business in just
          9 days!
        </a>
      </p>
      <p>
        You’re closer than ever—let’s make it happen together! &#128054;
        &#128188;
      </p>
    </div>
  );
  const learnMore = (
    <div>
      <h3>Not Ready Yet?</h3>
      <p>That’s Okay—We’ll Get You There! &#128062; &#128640;</p>
      <p>
        Your results show that you might not feel fully ready to dive into a
        dog-care business just yet, but if you dream of achieving financial
        independence and want to start building something of your own,
        <b> we’re here to help!</b>
      </p>
      <p>
        With the <b>Hound Away From Home course</b>, you’ll learn everything you
        need to:
      </p>
      <ul>
        <li>
          &#128021; Start your business on the right scale for your current
          lifestyle.
        </li>
        <li>
          &#128161; Gain the confidence and knowledge to grow step by step.
        </li>
        <li>
          &#127969; Build a foundation that sets you up for long-term success.
        </li>
      </ul>
      <p>
        This course is designed for anyone—whether you’re starting from scratch
        or looking to learn the basics—
        <b>to help you create a thriving dog-care business at your own pace.</b>
      </p>
      <p>
        <b>Take the First Step Today:</b>
      </p>
      <p>
        In just <b>9 days</b>, you’ll have the tools and confidence to:
      </p>
      <ul>
        <li>Launch your business at a manageable scale.</li>
        <li>Learn how to care for dogs while balancing your time.</li>
        <li>Start earning and growing your business as you gain experience.</li>
      </ul>
      <p>
        <b>Your journey starts here:</b>
      </p>
      <p>
        <a href="/course" className="link-primary text-decoration-none">
          &#128073; Sign up now and let us help you turn your dreams into a
          reality!
        </a>
      </p>
      <p>
        Everyone starts somewhere, and with the right guidance, you can build a
        business that grows alongside you.
        <b> Let’s take that first step together.</b>
        &#128054; &#10024;
      </p>
    </div>
  );
  if (result === "success") {
    return success;
  } else if (result == "consider") {
    return consider;
  } else {
    return learnMore;
  }
}