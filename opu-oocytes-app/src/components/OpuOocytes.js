import React from "react";
import { EditIcon } from "./Icons";
import Button from "./Button";
import Card from "./Card";

const OpuOocytes = () => {
  return (
    <div className="min-h-screen bg-figma-bg-primary text-white px-6 py-5 font-sans">
      {/* OPU & Oocytes Card */}
      <Card className="relative mb-6  ">
        <div className="flex items-center space-x-3 pb-4">
          <span className="text-3xl text-figma-icon-blue leading-none">
            <img src="/assets/group.png" alt="Group Icon" className="w-4 h-4" />
          </span>
          <h2 className="text-xl font-semibold text-figma-text-light tracking-wide-05 leading-120">OPU & Oocytes</h2>
          <button className="absolute top-4 right-4 text-figma-text-muted hover:text-figma-text-light focus:outline-none">
            <EditIcon />
          </button>
        </div>
        <div className="text-center">
          <p className="text-sm text-figma-text-light leading-[1.3] mb-1 font-medium">
            OPU Scheduled for{" "}
            <span className="underline font-medium text-figma-text-light">
              Friday 24 Jun 10:30 am
            </span>
          </p>
          <p className="text-sm text-figma-text-muted tracking-tight-05 leading-130 mb-6">
            Oocytes can be added here once OPU has successfully occurred
          </p>
          <Button className="px-8 w-65 mb-3">
            Add oocytes & OPU details
          </Button>
          <p className="text-xs text-figma-text-muted tracking-tight-05 leading-140">
            No oocytes collected,{" "}
            <span className="underline text-figma-gradient-start cursor-pointer hover:text-figma-gradient-start/80">
              close cycle
            </span>
          </p>
        </div>
      </Card>

      {/* Semen Sample Card */}
      <Card>
        <div className="flex flex-wrap items-center gap-2 mb-5">
          <img src="/assets/seman.png" alt="Semen Icon" className="w-4 h-4 rounded-lg" />
          <h3 className="text-lg font-semibold text-figma-text-light tracking-wide-05 leading-120 flex-shrink-0">
            Semen Sample 19A43A
          </h3>

          <span className="bg-blue-300 px-3 py-1 rounded-full font-medium text-xs text-blue-800 flex items-center gap-1.5 flex-shrink-0">
            <img src="/assets/Partner.png" alt="Partner Icon" className="w-4 h-4 rounded-lg" />
            Partner: PESA Testicular
          </span>

          <span className="bg-blue-300 px-3 py-1 rounded-full font-medium text-xs text-blue-800 flex items-center gap-1.5 flex-shrink-0">
            <img src="/assets/frozen.jpeg" alt="Frozen Icon" className="w-4 h-4 rounded-lg" />
            Frozen
          </span>

          <span className="bg-blue-300 px-3 py-1 rounded-full font-medium text-xs text-blue-800 flex-shrink-0">
            🕒 12:56 PM 10 Jun 2024
          </span>
        </div>

        <div className="grid md:grid-cols-3 gap-5">
          {/* Pre-processing */}
          <div className="bg-figma-card-inner rounded-xl p-4 space-y-3">
            <h4 className="font-medium text-sm flex items-center space-x-2 text-figma-text-light mb-2.5 tracking-wide-05 leading-120">
              <span className="text-sm text-figma-icon-blue leading-none -mt-0.5">🔬</span>
              <span>Pre-processing</span>
            </h4>
            <div className="grid grid-cols-2 gap-2 text-sm text-figma-text-light">
              <div className="bg-figma-data-box p-2 rounded-lg text-center leading-130">
                <span className="block font-medium tracking-tight-05">15 ml</span>
                <span className="text-xs text-figma-text-muted tracking-tight-05">Volume</span>
              </div>
              <div className="bg-figma-data-box p-2 rounded-lg text-center leading-130">
                <span className="block font-medium tracking-tight-05">15 M/mL</span>
                <span className="text-xs text-figma-text-muted tracking-tight-05">Concentration</span>
              </div>
              <div className="bg-figma-data-box p-2 rounded-lg text-center leading-130">
                <span className="block font-medium tracking-tight-05">4%</span>
                <span className="text-xs text-figma-text-muted tracking-tight-05">Normal Morphology</span>
              </div>
              <div className="bg-figma-data-box p-2 rounded-lg text-center leading-130">
                <span className="block font-medium tracking-tight-05">40%</span>
                <span className="text-xs text-figma-text-muted tracking-tight-05">Progressive Motility</span>
              </div>
            </div>
            <div className="bg-figma-data-box rounded-lg p-2.5 mt-2.5">
              <p className="text-xs text-figma-text-muted tracking-tight-05 leading-140 line-clamp-1">
                Minimal bleeding noted at puncture site, resolved without intervention. Minimal bleeding noted at puncture site, resolved without intervention.
              </p>
            </div>

          </div>

          {/* Post Preparation */}
          <div className="bg-figma-card-inner rounded-xl p-4 space-y-3">
            <h4 className="font-medium text-sm flex items-center space-x-2 text-figma-text-light mb-2.5 tracking-wide-05 leading-120">
              <span className="text-sm text-figma-icon-blue leading-none -mt-0.5">🧮</span>
              <span>Post Preparation</span>
              <span className="ml-2 text-xs bg-blue-200 text-figma-gradient-start px-2.5 py-0.5 rounded-full font-medium tracking-tight-05">
                microfluidics
              </span>
            </h4>
            <div className="grid grid-cols-2 gap-2 text-sm text-figma-text-light">
              <div className="bg-figma-data-box p-2 rounded-lg text-center leading-130">
                <span className="block font-medium tracking-tight-05">12 ml</span>
                <span className="text-xs text-figma-text-muted tracking-tight-05">Volume</span>
              </div>
              <div className="bg-figma-data-box p-2 rounded-lg text-center leading-130">
                <span className="block font-medium tracking-tight-05">18 M/mL</span>
                <span className="text-xs text-figma-text-muted tracking-tight-05">Concentration</span>
              </div>
              <div className="bg-figma-data-box p-2 rounded-lg text-center leading-130">
                <span className="block font-medium tracking-tight-05">5%</span>
                <span className="text-xs text-figma-text-muted tracking-tight-05">Normal Morphology</span>
              </div>
              <div className="bg-figma-data-box p-2 rounded-lg text-center leading-130">
                <span className="block font-medium tracking-tight-05">45%</span>
                <span className="text-xs text-figma-text-muted tracking-tight-05">Progressive Motility</span>
              </div>
            </div>
            <div className="bg-figma-data-box rounded-lg p-2.5 mt-2.5">
              <p className="text-xs text-figma-text-muted tracking-tight-05 leading-140 line-clamp-1">
                Minimal bleeding noted at puncture site, resolved without intervention. Minimal bleeding noted at puncture site, resolved without intervention.
              </p>
            </div>
          </div>

          {/* Insemination Block */}
          <div className="bg-figma-card-inner rounded-xl p-4 flex flex-col justify-center items-center text-center h-full">
            <div>
              <h4 className="text-base font-semibold mb-3 text-figma-text-light tracking-wide-05 leading-120">
                No insemination details yet
              </h4>
              <p className="text-sm text-figma-text-muted mb-4 tracking-tight-05 leading-140">
                This will come after OPU has been verified
              </p>
            </div>
            <Button className="px-3 w-70">
              Add insemination details
            </Button>
          </div>
        </div>
      </Card>
    </div>
  );
};

export default OpuOocytes;