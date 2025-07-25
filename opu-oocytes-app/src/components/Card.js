const Card = ({ children, className = "" }) => (
  <div className={`bg-figma-card-main rounded-card-custom p-5 shadow-figma-card ${className}`}>
    {children}
  </div>
);

export default Card;