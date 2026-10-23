import { useRef } from 'react';
import { createRoot } from 'react-dom/client';

import '@designcodeio/threeui/style.css';
import '../css/cards.css';

import { BirthdayPaper } from '../../src/shaders/3d-paper/BirthdayPaper';

export function Scene() {
    const dialogRef = useRef<HTMLDialogElement>(null);
    const triggerRef = useRef<HTMLButtonElement>(null);

    const openMessage = () => dialogRef.current?.showModal();
    const closeMessage = () => dialogRef.current?.close();

    return (
        <main className="birthday-shell">
            <div className="shader-frame">
                <BirthdayPaper />
            </div>

            <div className="birthday-chrome">
                <header className="birthday-topbar">
                    <div className="birthday-mark" aria-label="Untuk hari istimewamu">
                        <span className="birthday-mark__dot" aria-hidden="true" />
                        <span>24.10.2026</span>
                    </div>
                    <button
                        ref={triggerRef}
                        className="letter-trigger"
                        type="button"
                        onClick={openMessage}
                        aria-haspopup="dialog"
                    >
                        <span>Baca ucapan</span>
                        <span className="letter-trigger__arrow" aria-hidden="true">↗</span>
                    </button>
                </header>

                <p className="birthday-note">
                    Maap sayangg aku cuma bisa kasih ini <span aria-hidden="true">(╥‸╥)</span>
                </p>

                <div className="love-rail" aria-hidden="true">
                    <span>LOVEE YOUU ✦</span>
                    <span>LOVEE YOUU ✦</span>
                    <span>LOVEE YOUU ✦</span>
                    <span>LOVEE YOUU ✦</span>
                </div>
            </div>

            <dialog
                ref={dialogRef}
                className="birthday-letter"
                aria-labelledby="birthday-letter-title"
                onClose={() => triggerRef.current?.focus()}
                onClick={(event) => {
                    if (event.target === event.currentTarget) {
                        closeMessage();
                    }
                }}
            >
                <div className="letter-toolbar">
                    <p>A letter for <span>(≧ヮ≦)</span></p>
                    <button type="button" onClick={closeMessage} aria-label="Tutup ucapan">Tutup</button>
                </div>

                <div className="letter-scroll">
                    <header className="letter-hero">
                        <p className="letter-kicker">For my sweet boy · 24 October 2026</p>
                        <h1 id="birthday-letter-title">Happy Birthday,<br />Sweet Boy.</h1>
                        <p className="letter-intro">Maap sayangg aku cuma bisa kasih ini <span aria-hidden="true">(╥‸╥)</span></p>
                    </header>

                    <blockquote>
                        I am proud of you. For all the efforts you never spoke about, for every time you got back up,
                        and for the person you are now.
                    </blockquote>

                    <section className="reasons" aria-labelledby="reasons-title">
                        <div className="section-heading">
                            <p>Three little reasons</p>
                            <h2 id="reasons-title">The reason I like you <span aria-hidden="true">⸜(｡˃ ᵕ ˂ )⸝♡</span></h2>
                        </div>

                        <article>
                            <span className="reason-number">01</span>
                            <h3>Your effort</h3>
                            <p>Never stop growing just because life gets difficult. Rest when you need to, learn from every setback, and keep moving forward. I hope you become someone who never gives up on the person you know you can be.</p>
                        </article>
                        <article>
                            <span className="reason-number">02</span>
                            <h3>Your heart</h3>
                            <p>Never let the world make you forget the kindness within you. Keep your heart sincere, but learn to protect it with wisdom. I hope you grow into someone who cares deeply without losing themselves in the process.</p>
                        </article>
                        <article>
                            <span className="reason-number">03</span>
                            <h3>Your bravery</h3>
                            <p>Have the courage to stand by your principles, even when the world makes it easier to compromise. Be humble enough to admit when you are wrong, yet strong enough not to abandon what you believe is right. I hope you become someone who stands firm without losing the courage to grow.</p>
                        </article>
                    </section>

                    <div className="love-divider" aria-hidden="true">
                        <span>LOVEE YOUU</span><b>✦</b><span>YOU&apos;RE DOING YOUR BEST!</span><b>✦</b><span>LOVEE YOUU</span>
                    </div>

                    <section className="long-letter" aria-labelledby="long-letter-title">
                        <div className="section-heading">
                            <p>Translate</p>
                            <h2 id="long-letter-title">Happy Birthday, Sweet Boy</h2>
                        </div>
                        <div className="letter-copy">
                            <p>Happy birthday, sweet boy.</p>
                            <p>I hope your life will always be filled with happiness, genuine smiles, meaningful laughter, and people who truly appreciate you.</p>
                            <p>I hope your patience will lead you to something worth winning, your pain will be replaced with happiness, and your consistency will build the life you deserve.</p>
                            <p>As you grow older, I hope you become a man who knows exactly what he wants. A man who stands firmly on his principles, makes his own decisions, and has the courage to take responsibility for every choice he makes. Don&apos;t be afraid to have your own opinion, to say no, or to walk away from things that don&apos;t align with who you are.</p>
                            <p>Be intentional. Be brave. Be disciplined. Be strong-minded, but never become hard-hearted. Be open-minded enough to learn, wise enough to admit when you&apos;re wrong, and strong enough to keep going when things don&apos;t go your way.</p>
                            <p>I know I&apos;m not always easy to deal with. I&apos;m sorry for the times when my anger or the way I reacted may have hurt you or brought back things you never deserved to carry again. I don&apos;t want to be another source of pain in your life. I want us to grow, not break each other.</p>
                            <p>I don&apos;t expect you to become perfect. I just want to see you become a better version of yourself—more intentional, more confident, more courageous, more compassionate, and more certain of the person you want to be.</p>
                            <p>I hope you become someone who can stand firmly on his own feet, chase what he believes in, work hard for what he wants, and still remain kind and loving along the way.</p>
                            <p>And no matter how much I struggle to put my feelings into words, there&apos;s one thing I know for sure:</p>
                            <p className="letter-emphasis">I love you more than you probably realize.</p>
                            <p>Happy birthday, my sweet boy. I&apos;m proud of the person you are, and I&apos;m excited to see the man you&apos;re becoming.</p>
                        </div>
                    </section>

                    <footer className="letter-footer">
                        <p>You and Memories</p>
                        <strong>LOVEE YOUU ✦</strong>
                    </footer>
                </div>
            </dialog>
        </main>
    );
}

const root = document.getElementById('cards-root');

if (root) {
    createRoot(root).render(<Scene />);
}
